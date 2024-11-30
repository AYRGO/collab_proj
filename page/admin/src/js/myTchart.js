fetch('src/fetch_sex_data.php') // Replace with the actual PHP script path
    .then(response => response.json())
    .then(data => {
        console.log('Data received:', data);

        // Ensure Canvas Element Exists
        const canvas = document.getElementById('mytchart');
        if (!canvas) {
            console.error('Canvas element not found.');
            return;
        }

        // Check if Labels and Data are Present
        if (!data.labels || !data.data) {
            console.error('Invalid data structure:', data);
            return;
        }

        const ctx = canvas.getContext('2d');
        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: data.labels, // ['Male', 'Female', 'Others']
                datasets: [
                    {
                        label: 'Gender Distribution',
                        data: data.data, // The count data for Male, Female, Others
                        borderColor: data.borderColor, // Set border colors
                        backgroundColor: data.backgroundColor, // Set background colors
                        borderWidth: data.borderWidth
                    }
                ]
            },
            options: {
                scale: {
                    ticks: {
                        beginAtZero: true,
                        suggestedMax: 10 
                    },
                    pointLabels: {
                        font: {
                            size: 14, // Adjust font size for labels
                        },
                        // Define custom labels for the axes
                        callback: function(value, index, values) {
                            const predefinedLabels = ['Male Count', 'Female Count', 'Others Count'];
                            return predefinedLabels[index] || value; // Return predefined label or default
                        }
                    },
                    angleLines: {
                        display: true, 
                        lineWidth: 2 
                    },
                    gridLines: {
                        circular: false, 
                    }
                },
                elements: {
                    line: {
                        tension: 0, 
                    },
                    point: {
                        radius: 5, 
                    }
                },
                plugins: {
                    legend: {
                        position: 'top', 
                    },
                },
            }
        });
    })
    .catch(error => console.error('Error fetching data:', error));
