<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    $(document).ready(function(){
            $('#fetchDataBtn').click(function(){
                $.ajax({
                    url: 'fetch_data.php',
                    type: 'GET',
                    success: function(response){
                        $('#dataContainer').html(response);
                    },
                    error: function(){
                        alert('Error occurred while fetching data!');
                    }
                });
            });
        });
   