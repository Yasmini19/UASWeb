$(function() {
  $.ajax({
    type: "GET",
    url: "getAllPegawai/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "300px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAllDetail/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addDetail/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "PUT",
            url: "/clients/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteDetail/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "id_detail",
          title: "Id Detail",
          type: "text",
          width: 150
        },
        {
          name: "id_pinjam",
          title: "Id Pinjam",
          type: "text",
          width: 50
        },
         {
          name: "id_barang",
          title: "Id Barang",
          type: "text",
          width: 50
        },
         {
          name: "jumlah_pinjam",
          title: "Jumlah Pinjam",
          type: "text",
          width: 50
        },
         {
          name: "status",
          title: "Status",
          type: "text",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
