var mini = true;

        function toggleSidebar() {
            if (mini) {
                console.log("opening sidebar");
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                this.mini = false;
            } else {
                console.log("closing sidebar");
                document.getElementById("mySidebar").style.width = "70px";
                document.getElementById("main").style.marginLeft = "70px";
                this.mini = true;
            }
        }

