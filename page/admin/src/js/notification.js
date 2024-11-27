              // Function to fetch unread notification count
              function fetchNotificationCount() {
                const xhr = new XMLHttpRequest();
                xhr.open("GET", "src/fetch_unread_notification.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        const data = JSON.parse(xhr.responseText);
                        const count = data.unread_count;
            
                        // Update notification count
                        const notificationCountElement = document.getElementById("notification-count");
            
                        if (count > 0) {
                            notificationCountElement.textContent = count;
                            notificationCountElement.classList.remove("hidden"); // Show the count
                        } else {
                            notificationCountElement.classList.add("hidden"); // Hide if count is zero
                        }
                    }
                };
            
                xhr.send();
            }
            
            // Fetch the notification count every 5 seconds
            setInterval(fetchNotificationCount, 5000);
            
            // Initial fetch when the page loads
            fetchNotificationCount();
            
            // Toggle dropdown visibility when notification icon is clicked
            function toggleNotificationDropdown() {
                const dropdown = document.getElementById("notification-dropdown");
                const isHidden = dropdown.classList.contains("hidden");
            
                // If dropdown is hidden, show it, otherwise hide it
                if (isHidden) {
                    fetchNotificationDetails(); // Fetch and display notification data
                    dropdown.classList.remove("hidden");
            
                    // Mark notifications as read
                    markNotificationsAsRead(); // Mark them as read when the dropdown is opened
                } else {
                    dropdown.classList.add("hidden");
                }
            }
            
            // Function to fetch and display notification details in real-time
            function fetchNotificationDetails() {
                const xhr = new XMLHttpRequest();
                xhr.open("GET", "src/fetch_unread_notification.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        const data = JSON.parse(xhr.responseText);
                        console.log('Notifications data:', data); // Log the data
            
                        const notifications = data.notifications;
            
                        // Get the table body element to append rows
                        const tableBody = document.getElementById("notification-table-body");
            
                        // If there are no notifications
                        if (notifications.length === 0) {
                            if (tableBody.innerHTML.trim() === '') {
                                tableBody.innerHTML = '<tr><td colspan="3" class="px-4 py-2 text-center">No Notifications</td></tr>';
                            }
                            return;
                        }
            
                        // Append new notifications that are not already displayed
                        notifications.forEach(notification => {
                            const existingRows = Array.from(tableBody.rows);
                            const isNewNotification = !existingRows.some(row => row.cells[0].textContent === notification.fname + ' ' + notification.mname + ' ' + notification.lname);
            
                            if (isNewNotification) {
                                const row = document.createElement("tr");
                                row.innerHTML = `
                                    <td class="px-4 py-2">${notification.fname} ${notification.mname} ${notification.lname}</td>
                                    <td class="px-4 py-2">${notification.disability}</td>
                                    <td class="px-4 py-2">${notification.submitted_at}</td>
                                `;
                                tableBody.appendChild(row);
                            }
                        });
                    } else {
                        console.error('Failed to fetch notifications:', xhr.status);
                    }
                };
            
                xhr.send();
            }
            
            function markNotificationsAsRead() {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "src/mark_as_read.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        const data = JSON.parse(xhr.responseText);
                        if (data.status === 'success') {
                            console.log("Notifications marked as read");
            
                            // Reset the notification count
                            const notificationCountElement = document.getElementById("notification-count");
                            notificationCountElement.textContent = 0;
                            notificationCountElement.classList.add("hidden");
            
                            // Update the notification table with the latest 5 notifications
                            const tableBody = document.getElementById("notification-table-body");
                            tableBody.innerHTML = ''; // Clear existing rows
            
                            data.notifications.forEach(notification => {
                                const row = document.createElement("tr");
                                row.innerHTML = `
                                    <td class="px-4 py-2">${notification.fname} ${notification.mname || ''} ${notification.lname}</td>
                                    <td class="px-4 py-2">${notification.disability}</td>
                                    <td class="px-4 py-2">${notification.submitted_at}</td>
                                `;
                                tableBody.appendChild(row);
                            });
                        } else {
                            console.error("Failed to mark notifications as read");
                        }
                    } else {
                        console.error("Failed to send request to mark notifications as read");
                    }
                };
            
                xhr.send();
            }
            

            // Polling to update notification details every 5 seconds (make it feel real-time)
            setInterval(fetchNotificationDetails, 5000); // You can adjust the interval time as needed