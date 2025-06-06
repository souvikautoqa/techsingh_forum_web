import json
import google.generativeai as genai  # Correct import
import re
from flask import Flask, render_template, request, redirect, url_for, flash, session, jsonify
from flask_bcrypt import Bcrypt
from flask_socketio import SocketIO, emit, join_room, leave_room
from flask_cors import CORS  # Import CORS

# Set up Gemini API Key
genai.configure(api_key="AIzaSyCmUm-newE7YxM11Ul_ftzfh8LMJsCtuHU")

app = Flask(__name__)


# Enable CORS for all routes
CORS(app, resources={r"/*": {"origins": "*"}}, supports_credentials=True)



# socketio = SocketIO(app, cors_allowed_origins="*")

# socketio = SocketIO(app, cors_allowed_origins="*", async_mode="gevent", logger=True, engineio_logger=True)

socketio = SocketIO(app, cors_allowed_origins="*", async_mode="eventlet", logger=True, engineio_logger=True)




def extract_json(text):
    """Extracts the first valid JSON object from the AI response using regex."""
    match = re.search(r'\{.*\}', text, re.DOTALL)  # Finds first JSON-like block
    if match:
        json_str = match.group(0)  # Extract JSON part
        try:
            return json.loads(json_str)  # Convert to dictionary
        except json.JSONDecodeError:
            return {"error": "Failed to parse JSON from AI response"}
    return {"error": "No valid JSON found in AI response"}

def generate_seo_metadata(title, content):
    """Uses Gemini AI to generate SEO metadata"""
    
    prompt = f"""
    Generate SEO-friendly metadata for the given title and content. 
    **Return only JSON without any explanation or extra text.**
    
    Title: {title}
    
    Content: {content}

    The JSON format should be:
    {{
        "meta_title": "Your SEO-friendly title (max 60 characters)",
        "meta_description": "Your SEO-friendly description (max 160 characters)",
        "meta_keywords": "Comma-separated relevant keywords"
    }}
    Only output JSON, do not include any explanation or additional text.
    """

    try:
        model = genai.GenerativeModel("gemini-1.5-flash")
        response = model.generate_content(prompt)

        if response and hasattr(response, 'text'):
            response_text = response.text.strip()
            return extract_json(response_text)  # Extract and return valid JSON

        return {"error": "Empty response from AI"}

    except Exception as e:
        return {"error": str(e)}
    

@app.route('/',  methods=["GET"])
def home():
    return "Password"

@app.route('/generate_meta', methods=['POST'])
def generate_metadata():
    data = request.json
    title = data.get("title", "")
    content = data.get("content", "")

    if not title or not content:
        return jsonify({"error": "Title and content are required"}), 400

    seo_data = generate_seo_metadata(title, content)

    return jsonify(seo_data)

@socketio.on("join")
def handle_join(data):
    room = f"chat_{min(data['user1'], data['user2'])}_{max(data['user1'], data['user2'])}"
    join_room(room)

@socketio.on("send_message")
def handle_send_message(data):
    room = f"chat_{min(data['sender_id'], data['receiver_id'])}_{max(data['sender_id'], data['receiver_id'])}"
    emit("receive_message", data, room=room)

@socketio.on("typing")
def handle_typing(data):
    room = f"chat_{min(data['sender_id'], data['receiver_id'])}_{max(data['sender_id'], data['receiver_id'])}"
    emit("user_typing", {"sender_id": data["sender_id"]}, room=room)

@socketio.on("stop_typing")
def handle_stop_typing(data):
    room = f"chat_{min(data['sender_id'], data['receiver_id'])}_{max(data['sender_id'], data['receiver_id'])}"
    emit("user_stopped_typing", {"sender_id": data["sender_id"]}, room=room)

if __name__ == '__main__':
    # app.run(debug=True, host="0.0.0.0", port=5000)
    socketio.run(app, debug=True, host="0.0.0.0", port=5000, allow_unsafe_werkzeug=True)
