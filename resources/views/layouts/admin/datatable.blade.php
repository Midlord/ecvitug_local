<script>
$('table').DataTable({
    "scrollX": true,
    language: {
        lengthMenu: "Show _MENU_",
        search: "_INPUT_",
        searchPlaceholder: "Search",
        sSearch: '<i class="fa fa-search search-icon pull-right"></i>'
    },
    lengthMenu: [
        [ 10, 25, 50, -1 ],
        [ '10 items', '25 items', '50 items', 'All' ]
    ],
});
$('.dataTables_length').addClass('bs-select');
$("select[name='customerTable_length']").removeClass('custom-select');

</script>