fetch('src/fetch_application_data.php')
    .then(response => response.json())
    .then(data => {
        console.log('Data received:', data);

     
        const canvas = document.getElementById('myschart');
        if (!canvas) {
            console.error('Canvas element not found.');
            return;
        }

   
        if (!data.labels || !data.datasets) {
            console.warn('Invalid data structure:', data);
            return;
        }

        const ctxs = canvas.getContext('2d');
        new Chart(ctxs, {
            type: 'line',
            data: {
                labels: data.labels, // Years
                datasets: data.datasets // Application Types
            },
            options: {
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Counts'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Years'
                        }
                    }
                }
            }
        });
    })
    .catch(error => console.error('Error fetching data:', error));
