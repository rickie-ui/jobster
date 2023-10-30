$(document).ready(function () {
    $("#applications").DataTable();
    $("#table1").DataTable();
    $("#table2").DataTable();

    // Adding editor
    ClassicEditor.create(document.querySelector("#editor"), {
        toolbar: [
            "heading",
            "bold",
            "italic",
            "bulletedList",
            "numberedList",
            "link",
        ],
    }).catch((error) => {
        console.error(error);
    });

    // pop up message

    let duration = document.getElementById("duration");

    setTimeout(() => {
        duration.style.cssText = `display: none;`;
    }, 3000);

    // limiting past dates
    let dtToday = new Date();

    let month = dtToday.getMonth() + 1;
    let day = dtToday.getDate();
    let year = dtToday.getFullYear();
    if (month < 10) month = "0" + month.toString();
    if (day < 10) day = "0" + day.toString();

    let maxDate = year + "-" + month + "-" + day;

    $("#due").attr("min", maxDate);
});
