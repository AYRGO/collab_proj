<!-- header -->
    <header class="hidden sm:block sm:text-right sm:bg-blue-950 sm:text-white py-1 sm:px-6">
        <div id="displayDate"></div> 
        <!-- <div id="openingHours"></div> -->
    </header>

    <script>
         document.addEventListener('DOMContentLoaded', ()=>{
            const displayDate = document.getElementById('displayDate');
            const openingHours = document.getElementById('openingHours');

            const openHours = {
                    'Sunday': '7:00am - 12:00pm',
                    'Monday': '7:00am - 6:00pm',
                    'Tuesday': '7:00am - 6:00pm',
                    'Wednesday': '7:00am - 6:00pm',
                    'Thursday': '7:00am - 6:00pm',
                    'Friday': '7:00am - 6:00pm',
                    'Saturday': '7:00am - 5:00am'
            };
                

            function showDate(){
                const now = new Date();

                const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            
                const day = days[now.getDay()];
                const month = months[now.getMonth()];
                const date = String(now.getDate()).padStart(2, '0');
                const year = now.getFullYear();

                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                displayDate.textContent = `${day} | ${month} ${date}, ${year} | ${hours}:${minutes}:${seconds}`;

                openingHours.textContent = `Opening Hours: ${openHours[day]}`;
            }

            showDate();
            setInterval(showDate, 1000);
          })
    </script>