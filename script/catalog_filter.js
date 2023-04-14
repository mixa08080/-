//считывание всех элементов каталога
var cotalog = [];
document.querySelectorAll('.cotalog-item').forEach(elem => {
    cotalog.push({
        "image": elem.querySelector("img").src,
        "name": elem.querySelector("h3").childNodes[0].nodeValue,
        "link": elem.querySelector("a").href,
        "date": elem.querySelector("input[name=date]").value,
        "category": elem.querySelector("input[name=category]").value
    })
})
var sorted;
var data_sort_chek = true, name_sort_chek = true;
//сортировка по дате
function data_sort() {
    sorted = [];
    sorted = sorted.concat(cotalog);
    if (data_sort_chek) {
        sorted.sort(function (a, b) {
            if (new Date(a["date"]) > new Date(b["date"])) {
                return -1;
            } else {
                return 1;
            }
        })
        data_sort_chek = false;
    }
    else {
        sorted.sort(function (a, b) {
            if (new Date(a["date"]) < new Date(b["date"])) {
                return -1;
            } else {
                return 1;
            }
        })
        data_sort_chek = true;
    }
    output();
}
//соктировка по названию
function name_sort() {
    sorted = [];
    sorted = sorted.concat(cotalog);
    if (name_sort_chek) {
        sorted.sort(function (a, b) {
            return a["name"].localeCompare(b["name"]);
        })
        name_sort_chek = false;
    }
    else {
        sorted.sort(function (a, b) {
            return b["name"].localeCompare(a["name"]);
        })
        name_sort_chek = true;
    }
    output();
}
//фильтрация по категориям
function category_sort(category){
    sorted = [];
    cotalog.forEach(elem =>{
        if(elem.category==category){
            sorted.push(elem);
        }
    })
    output();
}
//Сброс сортировки
function clear_sort(){
    sorted = [];
    sorted = sorted.concat(cotalog);
    output();
}
//Вывод отсортированного результата
function output() {
    var outdata = "";
    sorted.forEach(elem => {
        outdata += `<div class="cotalog-item">
        <a href="post.php?id=${elem.link}">
        <img src="${elem.image}" alt="" />
        <h3 name="name">${elem.name}</h3></a>
        <input type="text" name="date" value="${elem.date}" hidden>
        <input type="text" name="category" value="${elem.category}" hidden>
    </div>`
    })
    document.querySelector('.cotalog').innerHTML = outdata;
}
