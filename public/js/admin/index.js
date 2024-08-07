document.getElementById('exportPdfButton').addEventListener('click', function() {
    console.log("Button clicked!");

    // Ambil kedua canvas
    var canvas1 = document.getElementById('myChartOne');
    var canvas2 = document.getElementById('combinedData');
    
    if (canvas1 && canvas2) {
        console.log("Canvas found:", canvas1, canvas2);

        // Buat objek jsPDF
        var pdf = new jspdf.jsPDF('landscape');
        
        // Gambar canvas pertama (chart pertama)
        var imgData1 = canvas1.toDataURL('image/png');
        pdf.addImage(imgData1, 'PNG', 10, 10, 280, 150); // Ubah ukuran dan posisi sesuai kebutuhan
        
        // Tambahkan halaman baru untuk canvas kedua (chart kedua)
        pdf.addPage();
        var imgData2 = canvas2.toDataURL('image/png');
        pdf.addImage(imgData2, 'PNG', 10, 10, 280, 150); // Ubah ukuran dan posisi sesuai kebutuhan
        
        // Simpan file PDF dengan nama tertentu
        pdf.save('chart.pdf');
    } else {
        console.error("One or both canvases not found");
    }
});



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


    fetch("/umkm/data-combined")
    .then((response) => response.json())
    .then(({ data_usaha, data_analytic }) => {
        // definisi variabel untuk polar chart
        let labels = [
            "Jenis Usaha",
            "Jumlah Pria",
            "Jumlah Wanita",
            "Dana Pribadi",
            "Dana Bank",
            "Usaha Tertinggi",
        ];
        let data = [
            data_usaha.length, // jumlah jenis usaha
            data_analytic.jk_pria,
            data_analytic.jk_wanita,
            data_analytic.dana_pribadi,
            data_analytic.dana_bank,
            1, // misalnya, ini bisa digunakan untuk menandai usaha tertinggi
        ];

        // tambahkan jenis usaha dari data_usaha ke dalam labels dan data
        data_usaha.forEach((usaha) => {
            labels.push(usaha.jenis_usaha);
            data.push(usaha.Pendaftar);
        });

        // Diagram Polar Area
        let ctxCombined = document.getElementById("combinedData").getContext("2d");

        // definisi warna untuk setiap jenis usaha
        let colors = [
            "rgba(255, 99, 132, 0.7)",
            "rgba(54, 162, 235, 0.7)",
            "rgba(255, 206, 86, 0.7)",
            "rgba(75, 192, 192, 0.7)",
            "rgba(153, 102, 255, 0.7)",
            "rgba(255, 159, 64, 0.7)",
            "rgba(255, 99, 255, 0.7)",
            "rgba(255, 206, 162, 0.7)",
            "rgba(54, 162, 86, 0.7)",
            "rgba(75, 192, 255, 0.7)",
            "rgba(153, 102, 100, 0.7)",
            "rgba(255, 159, 200, 0.7)",
            "rgba(255, 99, 64, 0.7)",
            "rgba(153, 102, 50, 0.7)",
            // tambahkan warna tambahan jika diperlukan
        ];

        let borderColors = [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
            "rgba(255, 99, 255, 1)",
            "rgba(255, 206, 162, 1)",
            "rgba(54, 162, 86, 1)",
            "rgba(75, 192, 255, 1)",
            "rgba(153, 102, 100, 1)",
            "rgba(255, 159, 200, 1)",
            "rgba(255, 99, 64, 1)",
            "rgba(153, 102, 50, 1)",
            // tambahkan warna border tambahan jika diperlukan
        ];

        // tambahkan warna dan border tambahan jika jumlah jenis usaha lebih dari 6
        for (let i = 6; i < labels.length; i++) {
            let color = `rgba(${Math.floor(Math.random() * 256)}, ${Math.floor(
                Math.random() * 256
            )}, ${Math.floor(Math.random() * 256)}, 0.7)`;
            let borderColor = `rgba(${Math.floor(Math.random() * 256)}, ${Math.floor(
                Math.random() * 256
            )}, ${Math.floor(Math.random() * 256)}, 1)`;
            colors.push(color);
            borderColors.push(borderColor);
        }

        let datasets = [{
            label: "Informasi Umum",
            data: data,
            backgroundColor: colors,
            borderColor: borderColors,
            borderWidth: 1,
        }];

        let polarChart = new Chart(ctxCombined, {
            type: "pie",
            data: {
                labels: labels,
                datasets: datasets,
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                if (tooltipItem.label === "Usaha Tertinggi") {
                                    return `${tooltipItem.label}: ${usaha_tertinggi}`;
                                } else if (tooltipItem.label === "Jenis Usaha") {
                                    return `${tooltipItem.label}: ${
                                        data_usaha.find(
                                            (usaha) => usaha.jenis_usaha === tooltipItem.raw.label
                                        ).jenis_usaha
                                    }`;
                                } else {
                                    return `${tooltipItem.label}: ${tooltipItem.raw.toFixed(2)}`;
                                }
                            },
                        },
                    },
                },
            },
        });
    });




