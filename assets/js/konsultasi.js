function MenuKonsultasi() {
  Loader();

  // $.ajax({

  // 	url:"api/pengetahuan_data.php",

  // 	type:"POST",

  // 	success:function(html){

  // 		console.log(html);

  // 	}

  // })

  $.ajax({
    url: "page/konsultasi/index.php",
    success: function (html) {
      dataLoad.html(html);
      $("#iconSatu").attr("data-ktwizard-state", "current");

      //   $("#nama").change(function (e) {
      //     e.preventDefault();

      //     var id_user = $(this).val();

      //     $.ajax({
      //       url: "api/konsultasi_add.php",

      //       type: "POST",

      //       data: { id: id_user },

      //       success: function (data) {
      //         // alert(data);
      //         $("#dataUser").html(data);
      //       },
      //     });

      //     // body...
      //   });

      var id_user = $("#id_user").val();
      $.ajax({
        url: "api/konsultasi_add.php",

        type: "POST",

        data: { id: id_user },

        success: function (data) {
          // alert(data);
          $("#dataUser").html(data);
        },
      });

      $("#formKonsul1").submit(function (e) {
        e.preventDefault();

        var nama = $("input[name='nama_lengkap']").val();

        var id_user = $("input[name='id_user']").val();

        var id_konsultasi = $("input[name='id_konsultasi']").val();

        $("#iconSatu").attr("data-ktwizard-state", "false");

        $("#formKonsul1").hide();

        $("#dua").show();

        $.ajax({
          url: "api/konsultasi_tanya.php",

          success: function (echo) {
            var data = echo.split("$");

            var id_gangguan = data[3];

            var id_solusi = data[4];

            console.log(
              id_gangguan +
                " - " +
                id_solusi +
                " - " +
                id_user +
                " - " +
                id_konsultasi
            );

            $.ajax({
              url: "api/konsultasi_hd.php",

              type: "POST",

              data: { id_konsultasi: id_konsultasi, id_user: id_user },

              success: function (data) {
                console.log(data);
              },
            });

            $("#pertanyaan").text("Hallo " + nama + ", " + data[0]);

            $("#ya").attr("data-id", data[1]);

            $("#tidak").attr("data-id", data[2]);
          },
        });

        $("#ya").click(function () {
          var id = $(this).attr("data-id");

          $.ajax({
            url: "api/konsultasi_tanya.php",

            type: "POST",

            data: { next: id },

            success: function (echo) {
              var data = echo.split("$");

              var id_gangguan = data[3];

              var id_solusi = data[4];

              console.log(
                id_gangguan +
                  " - " +
                  id_solusi +
                  " - " +
                  id_user +
                  " - " +
                  id_konsultasi
              );

              $.ajax({
                url: "api/konsultasi_dt.php",

                type: "POST",

                data: {
                  id_konsultasi: id_konsultasi,
                  id_gangguan: id_gangguan,
                },

                success: function (data) {
                  console.log(data);
                },
              });

              if (data[1] == 0 && data[2] == 0) {
                $.ajax({
                  url: "api/konsultasi_hd_upd.php",

                  type: "POST",

                  data: { id_konsultasi: id_konsultasi, id_solusi: id_solusi },

                  success: function (data) {
                    console.log(data);
                  },
                });

                $("#iconDua").attr("data-ktwizard-state", "false");

                $("#dua").hide();

                $("#tiga").show();

                $.ajax({
                  url: "page/hasil/form_view.php",

                  type: "POST",

                  data: { id: id_konsultasi },

                  success: function (data) {
                    $("#dataHasil").html(data);

                    Not("Konsultasi Selesai..", "success", "info-circle");
                  },
                });

                $("#hasil").text(data[0]);

                $("#iconTiga").attr("data-ktwizard-state", "current");
              } else {
                $("#pertanyaan").text("Hallo " + nama + ", " + data[0]);

                $("#ya").attr("data-id", data[1]);

                $("#tidak").attr("data-id", data[2]);
              }
            },
          });
        });

        $("#tidak").click(function () {
          var id = $(this).attr("data-id");

          $.ajax({
            url: "api/konsultasi_tanya.php",

            type: "POST",

            data: { next: id },

            success: function (echo) {
              var data = echo.split("$");

              var id_gangguan = data[3];

              var id_solusi = data[4];

              console.log(
                id_gangguan +
                  " - " +
                  id_solusi +
                  " - " +
                  id_user +
                  " - " +
                  id_konsultasi
              );

              $.ajax({
                url: "api/konsultasi_dt.php",

                type: "POST",

                data: {
                  id_konsultasi: id_konsultasi,
                  id_gangguan: id_gangguan,
                },

                success: function (data) {
                  console.log(data);
                },
              });

              if (data[1] == 0 && data[2] == 0) {
                $.ajax({
                  url: "api/konsultasi_hd_upd.php",

                  type: "POST",

                  data: { id_konsultasi: id_konsultasi, id_solusi: id_solusi },

                  success: function (data) {
                    console.log(data);
                  },
                });

                $("#iconDua").attr("data-ktwizard-state", "false");

                $("#dua").hide();

                $("#tiga").show();

                $.ajax({
                  url: "page/hasil/form_view.php",

                  type: "POST",

                  data: { id: id_konsultasi },

                  success: function (data) {
                    $("#dataHasil").html(data);

                    Not("Konsultasi Selesai..", "success", "info-circle");
                  },
                });

                $("#hasil").text(data[0]);

                $("#iconTiga").attr("data-ktwizard-state", "current");
              } else {
                $("#pertanyaan").text("Hallo " + nama + ", " + data[0]);

                $("#ya").attr("data-id", data[1]);

                $("#tidak").attr("data-id", data[2]);
              }
            },
          });
        });

        $("#iconDua").attr("data-ktwizard-state", "current");
      });

      $("#formKonsul2").submit(function (e) {
        $("#iconDua").attr("data-ktwizard-state", "false");

        e.preventDefault();

        $("#dua").hide();

        $("#tiga").fadeIn();

        $("#iconTiga").attr("data-ktwizard-state", "current");
      });

      var table = $("#tablePengetahuan").DataTable({
        processing: true,

        serverSide: true,

        scrollX: true,

        order: [[0, "asc"]],

        ajax: {
          url: "api/pengetahuan_data.php",

          type: "POST",
        },

        deferRender: true,

        aLengthMenu: [
          [5, 10, 50],
          [5, 10, 50],
        ], // Combobox Limit

        columnDefs: [
          {
            targets: 0,

            searchable: false,

            orderable: false,

            className: "dt-body-center",

            render: function (data, type, full, meta) {
              return (
                '<input class="data_cek" type="checkbox" name="id[]" value="' +
                $("<div/>").text(data).html() +
                '">'
              );
            },
          },
        ],

        columns: [
          { data: "id" },

          { data: "id" },

          { data: "pertanyaan" },

          { data: "ifyes" },

          { data: "ifno" },

          {
            render: function (data, type, row) {
              // Tampilkan kolom aksi

              var html = '<div class="btn-group btn-group" role="group">';

              html +=
                '<button type="button" onclick="ViewPengetahuan(' +
                row[0] +
                ')" class="btn btn-primary btnView" data-id="' +
                row[0] +
                '"><i class="fa fa-eye"></i> View</button>';

              html += "</div>";

              return html;
            },
          }, // Tampilkan nama
        ],
      });

      // buka form tambah

      // Handle click on "Select all" control

      $("#select_all").change(function () {
        $('input[type="checkbox"]').prop("checked", this.checked);

        $("#btnUserPilih").show();
      });

      $("#btnUserPilih").click(function () {
        var rows_selected = $(".data_cek:checked");

        var data = [];

        for (i = 0; i < rows_selected.length; i++) {
          data.push(rows_selected[i].value);
        }

        if (data == "") {
          Not("Tidak ada data yang terpilih..", "danger", "info-circle");
        } else {
          $.ajax({
            url: "api/konsultasi_delete.php",

            type: "POST",

            data: { id: data },

            success: function (data) {
              if (data == 200) {
                MenuKonsultasi();

                Not("data berhasil dihapus..", "success", "info-circle");
              }
            },
          });
        }
      });
    },
  });

  $(".kt-subheader__title").text("Konsultasi");
}

function AddPengetahuan() {
  Loader();

  $.ajax({
    url: "page/pengetahuan/form_add.php",

    success: function (html) {
      dataLoad.html(html);

      $(".kt-subheader__title").text("Add Pengetahuan");
    },
  });
}

function ViewPengetahuan(id) {
  Loader();

  $.ajax({
    url: "page/pengetahuan/form_view.php",

    type: "POST",

    data: { id: id },

    success: function (html) {
      dataLoad.html(html);

      $(".kt-subheader__title").text("View Pengetahuan");
    },
  });
}
