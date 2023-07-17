const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
    e.preventDefault();
  };

sendBtn.onclick = ()=> {
  // Ajax code
  let xhr = new XMLHttpRequest(); // creating XML object
  xhr.open("POST", "php/insert-chat.php", true);
  xhr.onload = () => {
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
           inputField.value = "";
          if(!chatBox.classList.contains("active")){
            scrollToBottom();
          }
        }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}
chatBox.onmouseenter = ()=>{
  chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
  chatBox.classList.remove("active");
}
setInterval(() => {
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          chatBox.innerHTML = data;
          if(!chatBox.classList.contains("active")){
            scrollToBottom();
          }
        }
      }
    };
    let formData = new FormData(form);
  xhr.send(formData);
  }, 500);

  function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
  }