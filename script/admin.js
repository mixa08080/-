//добавление видео по ссылке  
function video_link(){
    var video_input =	document.getElementById("video");
    video_input.type = "text";
    video_input.name = "link";
    video_input.placeholder = "Ссылка на видео";
}
//добавление видео с помощью видео
function video_file(){
    var video_input =	document.getElementById("video");
    video_input.type = "file";
    video_input.name = "video";
    video_input.placeholder = "Фаил видео";
}
//Переход на вкладку "добавление видео"
function video_add(){
    document.getElementById('add_video').style.display="block";
    document.getElementById('categories').style.display="none";
    document.getElementById('users').style.display="none";
}
//Переход на вкладку "Категории"
function categories(){
    document.getElementById('add_video').style.display="none";
    document.getElementById('categories').style.display="block";
    document.getElementById('users').style.display="none";
}
//Переход на вкладку "Пользователи"
function users(){
    document.getElementById('add_video').style.display="none";
    document.getElementById('categories').style.display="none";
    document.getElementById('users').style.display="flex";
}
