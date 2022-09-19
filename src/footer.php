 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!-- costom icon llink here -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- costom icon llink here -->
    <script src="js/index.js"></script>
    <script>
var toggle = document.querySelector("#toggle");
var leftsidebar = document.querySelector(".left-sidebar")
toggle.addEventListener("click", (e) => {
    leftsidebar.classList.toggle("sidebar-active")
})

var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();
var x = setInterval(function() {
var now = new Date().getTime();
var distance = countDownDate - now;
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
document.querySelector(".days").innerHTML=days;
document.querySelector(".hours").innerHTML=hours;
document.querySelector(".minuts").innerHTML=minutes;
document.querySelector(".second").innerHTML=seconds;
if (distance < 0) {
clearInterval(x);
}
}, 1000);
    </script>
</body>

</html>