//$(document).ready(function () { $('body').on('click', '.feed-id',function(){ document.getElementById("no_paket").value = $(this).attr('data-id'); console.log($(this).attr('data-id')); }); });

     // Start jQuery function after page is loaded
        $(document).ready(function(){
        
         // Start jQuery click function to view Bootstrap modal when view info button is clicked
            $('.feed-id').click(function(){
             // Get the id of selected phone and assign it in a variable called phoneData
                var no_paket = $(this).attr('id');
                
                // Start AJAX function
                $.ajax({
                 // Path for controller function which fetches selected phone data
                    url: "<?php echo base_url('paket/getdetail') ?>",
                    // Method of getting data
                    method: "POST",
                    // Data is sent to the server
                    data: {no_paket:no_paket},
                    // Callback function that is executed after data is successfully sent and recieved
                    success: function(data){
                     // Print the fetched data of the selected phone in the section called #phone_result 
                     // within the Bootstrap modal
                        $('#detail_paket').html(data);
                        // Display the Bootstrap modal
                        $('#ubahPaket').modal('show');
                    }
             });
             // End AJAX function
         });
     });  
