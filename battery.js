// Get the battery API
    navigator.getBattery().then(function(battery) {
        // Battery level is between 0 and 1, so we multiply it by 100 to get in percents
        let batrei = battery.level * 100 + "%";
        const levelbatrei = [10,5,0]
        
        levelbatrei.forEach(item => {
            if(battery.level * 100 == item){
                alert("silahkan charge batrei anda"+batrei);
            }
            else{
        document.getElementById("batre").innerHTML="<i class='bi bi-battery-full'>"+batrei+"</i>";
            }
        });
    });
