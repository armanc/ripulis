$(document).ready(function() {

     var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#search-pardod').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
//                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
//                    + $(that).val()
//                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
  
    $('#search-perk').keyup(function () {
        var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search2 tbody');
        var tableRowsClass = $('.table-list-search2 tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each(function (i, val) {

            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if (inputText != '')
            {
                $('.search-query-sf').remove();
//                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
//                    + $(that).val()
//                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if (rowText.indexOf(inputText) == -1)
            {
                //hide rows
                tableRowsClass.eq(i).hide();

            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if (tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
    
    
    
    $('#pardod-table').dataTable({
//        "paging":   false,
//        "ordering": false,
//        "info":     false,
         "dom": '<lf<t>ip>',
         "language": {
            "lengthMenu": "Attēlot _MENU_ ierakstus",
            "zeroRecords": "Nekas nav atrasts!",
            "info": "_PAGE_ lapa no _PAGES_",
            "infoEmpty": "Ieraksti nav pieejami",
            "infoFiltered": "(atlasīts no _MAX_ ierakstiem)"
        }
    });
    $('#perk-table').dataTable({
//        "paging":   false,
//        "ordering": false,
//        "info":     false
    });

 
    
    $('.block-view-btn').on('click', function(){
        $('.pardod-table').addClass('block-view');
        $('.block-view-btn').addClass('active');
        $('.list-view-btn').removeClass('active');
    });
    $('.list-view-btn').on('click', function(){
        $('.pardod-table').removeClass('block-view');
        $('.list-view-btn').addClass('active');
        $('.block-view-btn').removeClass('active');
    });
    
    
           
  
});



