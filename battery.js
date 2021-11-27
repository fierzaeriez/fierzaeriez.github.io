window.onload = function () {
        function updateBatteryStatus(battery) {
            document.querySelector('#charging').textContent = battery.charging ? "Status : "+'charging' : "Status : "+'not charging';
            document.querySelector('#dischargingTime').textContent = "Waktu : "+battery.dischargingTime % 60+" Minute";
        }
        // Update the battery status initially when the promise resolves ...
        // Get the battery API
        navigator.getBattery().then(function(battery) {

            updateBatteryStatus(battery);

            // .. and for any subsequent updates.
            battery.onchargingchange = function () {
            updateBatteryStatus(battery);
            };

            battery.ondischargingtimechange = function () {
            updateBatteryStatus(battery);
            };
            // Battery level is between 0 and 1, so we multiply it by 100 to get in percents
            let batrei = battery.level * 100 + "%";
            const levelbatrei = [5,1]

            levelbatrei.forEach(item => {
                if(battery.level * 100 == item){
                    Swal.fire({
                    icon: 'warning',
                    title: 'Sisah Baterai anda Tinggal '+batrei,
                    text: 'Silahkan Charge Sebelum Kehabisan',
                    })
                    document.getElementById("batre").innerHTML=batrei;
                    document.getElementById("baterainya").innerHTML="<i class=\"bi bi-battery\"></i>";
                }
                else{
                    document.getElementById("batre").innerHTML=batrei;
                    document.getElementById("baterainya").innerHTML="<i class='bi bi-battery-full'></i>";
                }
            });
        });
    };
