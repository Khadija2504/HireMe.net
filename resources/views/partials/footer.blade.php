<footer class="bg-blue-900 py-4">
    <div class="container mx-auto px-4">
        <p class="text-center text-white">Part of <a href="www.HireMe.net"
                class="text-blue-200 hover:text-white">Hire-Me.Net</a></p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myInput').on('keyup', function() {
                let inputValue = this.value;
                let outputDiv = "#result";
                if (inputValue != "") {
                    $.ajax({
                        url: "",
                        data: {
                            'input': inputValue
                        },
                        dataType: "html",
                        type: "POST",
                        success: function(response) {
                            $(outputDiv).empty().html(response);
                        }
                    });
                } else {
                    let msg = "";
                    $('.errMsg').text(msg);
                    $(outputDiv).empty();
                }
            });
        });
    </script>

<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>

</html>