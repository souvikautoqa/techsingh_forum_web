$(document).ready(function () {

	// document.addEventListener("DOMContentLoaded", function () {
	// 	new SimpleBar(document.querySelector("#chat-detail-box"), {
	// 		autoHide: true, // Hide scrollbar when not scrolling
	// 	});
	// });

	// function scrollToBottom() {
	// 	let chatContainer = document.querySelector("#chat-detail-box");
	// 	if (chatContainer) {
	// 		let simpleBar = SimpleBar.instances.get(chatContainer);
	// 		if (simpleBar) {
	// 			simpleBar.getScrollElement().scrollTop = simpleBar.getScrollElement().scrollHeight;
	// 		}
	// 	}
	// }


    // var socket = io("https://csdp.pt/socket.io/", { transports: ["websocket"] }); // Replace with your WebSocket URL

	var socket = io("https://csdp.pt", { 
		transports: ["websocket"],
		path: "/socket.io/"  // Only if you've specifically configured this path
	  });



    var typingTimer;

    // Auto-scroll function
    function scrollToBottom() {
        $("#chat-detail-box").scrollTop($("#chat-detail-box")[0].scrollHeight);
    }
    scrollToBottom();

    // Join chat room for private messaging
    socket.emit("join", { user1: currentUser, user2: receiverId });


	function saveMessage(sender_id, receiver_id, message) {
		$.ajax({
			url: web_base_url + "chat/storeMessage", // Replace with your actual backend endpoint
			type: "POST",
			data: {
				sender_id: sender_id,
				receiver_id: receiver_id,
				message: message
			},
			success: function (response) {
				console.log("✅ Message saved:", response);
			},
			error: function (xhr, status, error) {
				console.error("❌ Error saving message:", error);
			}
		});
	}
	

    // Handle message sending
    $("#chatForm").submit(function (e) {
		e.preventDefault();
	
		let message = $("#message_input").val().trim();
		if (message === "") return;
	
		// Emit message via WebSocket
		socket.emit("send_message", {
			sender_id: currentUser,
			receiver_id: receiverId,
			message: message
		});
	
		// Save message to the database
		saveMessage(currentUser, receiverId, message);

		let messageTime = new Date().toLocaleString("en-GB", {
			day: "2-digit",
			month: "short",
			year: "numeric",
			hour: "2-digit",
			minute: "2-digit",
			hour12: false
		}).replace(",", ""); 
	
		// Append sent message to chat box
		let messageHTML = `
			<div class="d-flex align-items-start justify-content-end mb-3 chat-box">
				<div class="ps-2 ms-1 chat-message">
					<div class="p-3 mb-1 bg-green text-light chat-text-right">
						<p>${message}</p>
					</div>
					<div class="d-flex justify-content-end align-items-center fs-sm text-muted">${messageTime}</div>
				</div>
			</div>`;
		$("#chat-detail-box").append(messageHTML);
	
		$("#message_input").val(""); // Clear input field
		scrollToBottom();
	});
	
	
    // Receive messages
    socket.on("receive_message", function (data) {
		console.log(data);
        if (data.sender_id != currentUser) {

			let messageTime = new Date().toLocaleString("en-GB", {
				day: "2-digit",
				month: "short",
				year: "numeric",
				hour: "2-digit",
				minute: "2-digit",
				hour12: false
			}).replace(",", ""); // Remove the comma between date & time

            let messageHTML = `
                <div class="d-flex align-items-start mb-3 chat-box">
                    <img src="https://avatar.iran.liara.run/public?username=${receiverName}" class="rounded-circle" width="40" alt="">
                    <div class="ps-2 ms-1 chat-message">
                        <div class="p-3 mb-1 chat-text-left">
                            <p>${data.message}</p>
                        </div>
                        <div class="fs-sm text-muted">${messageTime}</div>
                    </div>
                </div>`;
            $("#chat-detail-box").append(messageHTML);
            scrollToBottom();
        }
    });

    // Typing Indicator
    // $("#message_input").on("input", function () {
    //     socket.emit("typing", { sender_id: currentUser, receiver_id: receiverId });

    //     clearTimeout(typingTimer);
    //     typingTimer = setTimeout(() => {
    //         socket.emit("stop_typing", { sender_id: currentUser, receiver_id: receiverId });
    //     }, 1000);
    // });

    // socket.on("user_typing", function (data) {
    //     if (data.sender_id == receiverId) {
    //         $("#typing-status").show();
    //     }
    // });

    // socket.on("user_stopped_typing", function (data) {
    //     if (data.sender_id == receiverId) {
    //         $("#typing-status").hide();
    //     }
    // });

    // // Handle user online/offline status
    // socket.on("user_offline", function (data) {
    //     if (data.user_id == receiverId) {
    //         $("#user-status").html('<i class="bi bi-circle-fill text-danger me-1"></i>Offline');
    //     }
    // });

    // socket.on("user_online", function (data) {
    //     if (data.user_id == receiverId) {
    //         $("#user-status").html('<i class="bi bi-circle-fill text-success me-1"></i>Online');
    //     }
    // });

    // // Notify server when user leaves
    // window.onbeforeunload = function () {
    //     socket.emit("user_offline", { user_id: currentUser });
    // };
});
