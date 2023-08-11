
        const searchButton = document.getElementById('searchButton');
        const searchInput = document.getElementById('searchInput');
        const resultsDiv = document.getElementById('results');

        searchButton.addEventListener('click', () => {
            const searchTerm = searchInput.value;
            if (searchTerm) {
                fetch(`https://mp2-api-three.vercel.app/?query=${searchTerm}`)
                    .then(response => response.json())
                    .then(data => {
                        // Process and display data in the resultsDiv
                        resultsDiv.innerHTML = JSON.stringify(data);
                    })
                    .catch(error => {
                        console.error('API request failed', error);
                        resultsDiv.innerHTML = 'An error occurred while fetching data.';
                    });
            }
        });
