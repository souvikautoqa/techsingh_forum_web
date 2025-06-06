<!DOCTYPE html>
<html>
<head>
  <title>Custom Comment Editor</title>
  <style>
    #toolbar {
      margin-bottom: 10px;
    }
    #toolbar button {
      margin-right: 5px;
    }
    #editor {
      border: 1px solid #ccc;
      min-height: 150px;
      padding: 10px;
    }
    #linkDialog {
      display: none;
      position: fixed;
      top: 100px;
      left: 50%;
      transform: translateX(-50%);
      background: #fff;
      border: 1px solid #ccc;
      padding: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      z-index: 999;
    }
  </style>
</head>
<body>

<h3>Comment Box</h3>

<div id="toolbar">
  <button onclick="format('bold')"><b>B</b></button>
  <button onclick="format('italic')"><i>I</i></button>
  <button onclick="format('underline')"><u>U</u></button>
  <button onclick="openLinkDialog()">🔗</button>
</div>

<div id="editor" contenteditable="true"></div>

<br>
<button onclick="submitComment()">Submit</button>

<div id="linkDialog">
  <label>
    URL:
    <input type="text" id="linkUrl" placeholder="https://example.com">
  </label><br><br>
  <label>
    rel:
    <input type="text" id="linkRel" placeholder="nofollow, noopener, etc.">
  </label><br><br>
  <button onclick="applyLink()">Insert</button>
  <button onclick="closeLinkDialog()">Cancel</button>
</div>

<script>
  let savedSelection;

  function format(command) {
    document.execCommand(command, false, null);
  }

  function saveSelection() {
    const sel = window.getSelection();
    if (sel.rangeCount > 0) {
      savedSelection = sel.getRangeAt(0);
    }
  }

  function restoreSelection() {
    const sel = window.getSelection();
    if (savedSelection) {
      sel.removeAllRanges();
      sel.addRange(savedSelection);
    }
  }

  function openLinkDialog() {
    saveSelection();
    document.getElementById('linkDialog').style.display = 'block';

    // If user has selected a link, preload its data
    const anchor = getSelectedAnchor();
    if (anchor) {
      document.getElementById('linkUrl').value = anchor.getAttribute('href') || '';
      document.getElementById('linkRel').value = anchor.getAttribute('rel') || '';
    } else {
      document.getElementById('linkUrl').value = '';
      document.getElementById('linkRel').value = '';
    }
  }

  function closeLinkDialog() {
    document.getElementById('linkDialog').style.display = 'none';
  }

  function applyLink() {
    restoreSelection();
    const url = document.getElementById('linkUrl').value;
    const rel = document.getElementById('linkRel').value;

    if (url) {
      document.execCommand('createLink', false, url);

      // Set rel + target manually
      setTimeout(() => {
        const anchor = getSelectedAnchor();
        if (anchor) {
          anchor.setAttribute('href', url);
          anchor.setAttribute('target', '_blank');
          if (rel) {
            anchor.setAttribute('rel', rel);
          } else {
            anchor.removeAttribute('rel');
          }
        }
      }, 0);
    }

    closeLinkDialog();
  }

  function getSelectedAnchor() {
    const sel = window.getSelection();
    if (sel.rangeCount > 0) {
      const container = sel.getRangeAt(0).commonAncestorContainer;
      return container.nodeType === 1 ? container.closest('a') : container.parentElement.closest('a');
    }
    return null;
  }

  function submitComment() {
    const content = document.getElementById('editor').innerHTML;
    alert("Submitted HTML:\n\n" + content);
    // You can now send this HTML to your server
  }
</script>

</body>
</html>



<script src="https://cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>

<textarea id="editor1"></textarea>

<script>
  CKEDITOR.replace('editor1', {
    toolbar: [['Bold', 'Italic', 'Underline', 'Link']],
    linkShowAdvancedTab: true,
    on: {
      dialogShow: function (evt) {
        var dialog = evt.data;

        if (dialog.getName() === 'link') {
          var tab = dialog.getContentElement('advanced', 'advRel');
          if (tab) {
            tab.getElement().getParent().show(); // Ensure it's visible
          }

          // Hide all other fields in Advanced tab
          var toHide = [
            'advId',
            'advLangDir',
            'advAccessKey',
            'advName',
            'advLangCode',
            'advTabIndex',
            'advTitle',
            'advContentType',
            'advCSSClasses',
            'advCharset',
            'advStyle',
            'advDownload'
          ];

          toHide.forEach(function (fieldId) {
            var field = dialog.getContentElement('advanced', fieldId);
            if (field) {
              field.getElement().getParent().hide(); // actually hides the field visually
            }
          });
        }
      }
    }
  });
</script>
