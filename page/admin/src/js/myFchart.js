fetch('src/fetch_disability_data.php')
    .then(response => response.json())
    .then(data => {
        console.log('Data received:', data);
   // Ensure Canvas Element Exists
        const canvas = document.getElementById('myfchart');
        if (!canvas) {
            console.error('Canvas element not found.');
            return;
        }

     
        const predefinedLabels = [
            'Deaf',
            'Intellectual Disability',
            'Learning Disability',
            'Mental Disability',
            'Physical Disability',
            'Visual Disability',
            'Psychosocial Disability',
            'Speech and Language Impairment',
            'Cancer (RA11215)',
            'Rare Disease (RA10747)'
        ];

       
        const counts = predefinedLabels.map(label => {
            const index = data.labels?.indexOf(label);
            return index !== -1 ? data.data[index] : 0;
        });

        // Render the Chart
        const ctx = canvas.getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: predefinedLabels,
                datasets: [{
                    label: 'Disability Counts',
                    data: counts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(201, 203, 207, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'right',
                    },
                },
            }
        });
    })
    .catch(error => console.error('Error fetching data:', error));
