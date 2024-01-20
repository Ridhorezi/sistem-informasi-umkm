$("#btn-slider").click(function () {
    if ($("#sliders").hasClass("active")) {
        $("#sliders").removeClass("active");
        $("#sliders-background").removeClass("active");
    } else {
        $("#sliders").addClass("active");
        $("#sliders-background").addClass("active");
    }
});

$("#sliders-background").click(function () {
    $("#sliders").removeClass("active");
    $("#sliders-background").removeClass("active");
});

// ...

fetch("/umkm/data-pendaftar")
    .then((response) => response.json())
    .then(({ data_usaha }) => {
        // definisi variable
        let jenisUsaha = [...new Set(data_usaha.map((i) => i.jenis_usaha))];
        let tahun = [...new Set(data_usaha.map((i) => i.Tahun))];

        // Persiapkan struktur data untuk setiap tahun
        let dataPerTahun = {};
        tahun.forEach((t) => {
            dataPerTahun[t] = Array(jenisUsaha.length).fill(0);
        });

        // Mengisi data sesuai jenis usaha dan tahun
        data_usaha.forEach((item) => {
            let tahunIndex = tahun.indexOf(item.Tahun);
            let jenisIndex = jenisUsaha.indexOf(item.jenis_usaha);
            dataPerTahun[item.Tahun][jenisIndex] = item.Pendaftar;
        });

        // Diagram Pendaftar
        let ctx = document.getElementById("myChartOne").getContext("2d");

        let myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: jenisUsaha,
                datasets: tahun.map((t) => ({
                    label: `Data / Tahun ${t}`,
                    data: dataPerTahun[t],
                    backgroundColor: [
                        "rgba(128, 158, 224, 0.2)",
                        "rgba(254, 207, 116, 0.2)",
                        "rgba(163, 217, 173, 0.2)",
                        "rgba(127, 102, 157, 0.2)",
                        "rgba(255, 30, 30, 0.2)",
                        "rgba(95, 113, 97, 0.2)",
                        "rgba(255, 87, 127, 0.2)",
                        "rgba(93, 56, 145, 0.2)",
                        "rgba(252, 226, 42, 0.2)",
                        "rgba(0, 255, 246, 0.2)",
                        "rgba(33, 70, 199, 0.2)",
                    ],
                    borderColor: [
                        "rgba(128, 158, 224, 1)",
                        "rgba(254, 207, 116, 1)",
                        "rgba(163, 217, 173, 1)",
                        "rgba(127, 102, 157, 1)",
                        "rgba(255, 30, 30, 1)",
                        "rgba(95, 113, 97, 1)",
                        "rgba(255, 87, 127, 1)",
                        "rgba(93, 56, 145, 1)",
                        "rgba(252, 226, 42, 1)",
                        "rgba(0, 255, 246, 1)",
                        "rgba(33, 70, 199, 1)",
                    ],
                    borderWidth: 1,
                })),
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
                plugins: {
                    tooltip: {
                        mode: "index",
                        intersect: false,
                    },
                },
                hover: {
                    mode: "nearest",
                    intersect: true,
                },
            },
        });

        console.log("Tahun:", tahun); // cek tahun
    });

// fetch("/umkm/data-kelurahan")
//     .then((response) => response.json())
//     .then(({ data_kelurahan }) => {
//         let dataKelurahan = data_kelurahan.map((i) => i.kelurahan_pemilik);
//         let totalKelurahan = data_kelurahan.map((i) => i.total);

//         //Diagram Kelurahan
//         let ctx = document.getElementById("myChartOne").getContext("2d");
//         let myChart = new Chart(ctx, {
//             type: "bar",
//             data: {
//                 labels: dataKelurahan,
//                 datasets: [
//                     {
//                         label: "# of Kelurahan Pemilik",
//                         data: totalKelurahan,
//                         backgroundColor: [
//                             "rgba(128, 158, 224, 0.2)",
//                             "rgba(254, 207, 116, 0.2)",
//                             "rgba(163, 217, 173, 0.2)",
//                             "rgba(127, 102, 157, 0.2)",
//                             "rgba(255, 30, 30, 0.2)",
//                             "rgba(95, 113, 97, 0.2)",
//                             "rgba(255, 87, 127, 0.2)",
//                             "rgba(93, 56, 145, 0.2)",
//                             "rgba(252, 226, 42, 0.2)",
//                             "rgba(0, 255, 246, 0.2)",
//                             "rgba(33, 70, 199, 0.2)",
//                         ],
//                         borderColor: [
//                             "rgba(128, 158, 224, 1)",
//                             "rgba(254, 207, 116, 1)",
//                             "rgba(163, 217, 173, 1)",
//                             "rgba(127, 102, 157, 1)",
//                             "rgba(255, 30, 30, 1)",
//                             "rgba(95, 113, 97, 1)",
//                             "rgba(255, 87, 127, 1)",
//                             "rgba(93, 56, 145, 1)",
//                             "rgba(252, 226, 42, 1)",
//                             "rgba(0, 255, 246, 1)",
//                             "rgba(33, 70, 199, 1)",
//                         ],
//                         borderWidth: 1,
//                     },
//                 ],
//             },
//             options: {
//                 scales: {
//                     y: {
//                         beginAtZero: true,
//                     },
//                 },
//             },
//         });
//     });

// fetch("/umkm/data-kelurahan")
//     .then((response) => response.json())
//     .then(({ data_kecamatan }) => {
//         let dataKecamatan = data_kecamatan.map((i) => i.kecamatan_pemilik);
//         let totalKecamatan = data_kecamatan.map((i) => i.total);

//         //Diagram Kecamatan
//         var ctx = document.getElementById("myChartTwo").getContext("2d");
//         var myChart = new Chart(ctx, {
//             type: "pie",
//             data: {
//                 labels: dataKecamatan,
//                 datasets: [
//                     {
//                         label: "# of Kecamatan Pemilik",
//                         data: totalKecamatan,
//                         backgroundColor: [
//                             "rgba(128, 158, 224, 0.2)",
//                             "rgba(254, 207, 116, 0.2)",
//                             "rgba(163, 217, 173, 0.2)",
//                             "rgba(127, 102, 157, 0.2)",
//                             "rgba(255, 30, 30, 0.2)",
//                             "rgba(95, 113, 97, 0.2)",
//                             "rgba(255, 87, 127, 0.2)",
//                             "rgba(93, 56, 145, 0.2)",
//                             "rgba(252, 226, 42, 0.2)",
//                             "rgba(0, 255, 246, 0.2)",
//                             "rgba(33, 70, 199, 0.2)",
//                         ],
//                         borderColor: [
//                             "rgba(128, 158, 224, 1)",
//                             "rgba(254, 207, 116, 1)",
//                             "rgba(163, 217, 173, 1)",
//                             "rgba(127, 102, 157, 1)",
//                             "rgba(255, 30, 30, 1)",
//                             "rgba(95, 113, 97, 1)",
//                             "rgba(255, 87, 127, 1)",
//                             "rgba(93, 56, 145, 1)",
//                             "rgba(252, 226, 42, 1)",
//                             "rgba(0, 255, 246, 1)",
//                             "rgba(33, 70, 199, 1)",
//                         ],
//                         borderWidth: 2,
//                     },
//                 ],
//             },
//             options: {
//                 scales: {
//                     y: {
//                         beginAtZero: true,
//                     },
//                 },
//             },
//         });
//     });
