// custom filter
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", () => {
        document.getElementById("filter-form").submit();
    });
});

// pop up message

let duration = document.getElementById("message");
let success = document.getElementById("success");
let profile = document.getElementById("profile");

setTimeout(() => {
    duration.style.cssText = `display: none;`;
}, 3000);
setTimeout(() => {
    success.style.cssText = `display: none;`;
}, 3000);
setTimeout(() => {
    profile.style.cssText = `display: none;`;
}, 3000);
