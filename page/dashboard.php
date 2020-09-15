<?php



include_once '../api/koneksi.php';




?>
<div class="container">
    <?php include_once 'slider.php'; ?>
</div>

<

<script type="text/javascript">
var pie1 = new Highcharts.Chart({
    chart: {
        renderTo: 'pie1',
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: ''
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{

        data: [ <
            ?
            php

            $sql =
            "SELECT `hasil`,COUNT(konsultasi_hd.id_user) AS jml FROM `konsultasi_hd` JOIN master_solusi ON konsultasi_hd.id_solusi = master_solusi.id  GROUP BY `hasil`";
            $query = $conn - > query($sql);
            while ($r = $query - > fetch()) {
                $kolom = $r['hasil'];

                ?
                >


                ['<?php echo $kolom ?>', < ? php echo $r['jml'] ? > ],

                <
                ?
                php
            } ? >



        ]
    }]
});



var cart1 = new Highcharts.Chart({
    chart: {
        renderTo: 'cart1',
        type: 'column'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: ['Kepribadian']
    },
    yAxis: {
        title: {
            text: 'Jumlah Pasien/Pengguna'
        }
    },
    plotOptions: {
        series: {
            borderWidth: 2,
            dataLabels: {
                enabled: true,

                format: '{point.y:.2f}%'
            }
        }
    },

    series: [ <
        ?
        php

        $sql =
        "SELECT `hasil`,COUNT(konsultasi_hd.id_user) AS jml FROM `konsultasi_hd` JOIN master_solusi ON konsultasi_hd.id_solusi = master_solusi.id GROUP BY `hasil`";
        $query = $conn - > query($sql);
        while ($r = $query - > fetch()) {
            $kolom = $r['hasil'];

            ?
            >
            {
                name: '<?php echo $kolom ?>',
                data: [ < ? php echo $r['jml']; ? > ]
            }, <
            ?
            php
        } ? >
    ]
});
</script>