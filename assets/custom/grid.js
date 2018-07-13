$(function() {
  $.ajax({
    type: "GET",
    url: "getAllUser/"
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
            url: "getAllUser/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addUser/",
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
            url: "deleteUser/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "id_user",
          title: "Id User",
          type: "text",
          width: 50
        },
        {
          name: "nama",
          title: "Nama User",
          type: "text",
          width: 50
        },
         {
          name: "organisasi",
          title: "Organisasi",
          type: "text",
          width: 50
        },
         {
          name: "no_hp",
          title: "No Hp",
          type: "text",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
