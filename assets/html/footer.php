<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/assets/javascript/bootstrap.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {

        $('.launch-programme').click(function(el) {
            event.preventDefault();

            $('#myModal').modal();

            var tutorial = $(this).data('tutorial');
            var programme = $(this).data('programme');

            $.ajax({
                url : '/launch_programme/?programme=' + programme + '&tutorial=' + tutorial,
                type: 'GET',
                success: function(result) {
                    $('#myModal').modal('toggle');
                }
            });

        })
    });
</script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Your mission Jim should you choose to accept it</h4>
            </div>
            <div class="modal-body">
                <p>Is to create various routes through the MVC model</p>
                <p>This modal window will self destruct in five seconds</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>