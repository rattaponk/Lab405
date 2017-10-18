$('.table').bootstrapTable({
  locale: "th-TH",
  url: "dataTable.php?init=1",
  pagination: true,
  sidePagination: "server"
});

$('.search').keyup(function() {
  var word = $(this).val();

  $('.table').bootstrapTable('destroy');
  $('.table').bootstrapTable({
    locale: "th-TH",
    url: "dataTable.php?init=2&word=" + word,
    pagination: true,
    sidePagination: "server"
  });
});
