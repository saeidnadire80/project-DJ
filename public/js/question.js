// Get the modal
var modal = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function question() {
    window.location.assign("http://localhost:8000/register")
}
function answer() {
    window.location.assign("http://localhost:8000/register")
}
