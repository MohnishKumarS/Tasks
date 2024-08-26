            // ---- fetch data ---
            // fetch("./sample.json")
            //     .then(response => response.json() )
            //     .then(data => {
            //         // console.log(moreOptions);
            //
    
            let moreOpt = {
                moreOptions: {
                    serviceActions: [{
                            "name": "Poweron",
                            "desc": "Poweron is the server function",
                            "img": "power-on.png",
                            "request": "/api"
                        },
                        {
                            "name": "Power Off",
                            "desc": "Poweron is the server function",
                            "img": "power-off.png",
                            "request": "/api"
                        },
                        {
                            "name": "Shut Down",
                            "desc": "Shut Down is the server function",
                            "img": "shut-down.png",
                            "request": "/api"
                        },
                        {
                            "name": "Reboot",
                            "desc": "Reboot is the server function",
                            "img": "reboot.png",
                            "request": "/api"
                        },
                        {
                            "name": "Reset Password",
                            "desc": "Reset Password is the server function",
                            "img": "reset.png",
                            "request": "/api"
                        }
                    ],
                    serviceManagement: [{
                            "name": "Backups",
                            "desc": "Backups is the server function",
                            "img": "backup.png",
                            "request": "/api"
                        },
                        {
                            "name": "Console",
                            "desc": "Console is the server function",
                            "img": "console.png",
                            "request": "/api"
                        },
                        {
                            "name": "Firewalls",
                            "desc": "Firewalls is the server function",
                            "img": "firewall.png",
                            "request": "/api"
                        },
                        {
                            "name": "Floating IP Addresses",
                            "desc": "Floating IP Addresses is the server function",
                            "img": "ip.png",
                            "request": "/api"
                        },
                        {
                            "name": "Graph",
                            "desc": "Graph is the server function",
                            "img": "graph.png",
                            "request": "/api"
                        },
                        {
                            "name": "ISO Images",
                            "desc": "ISO Images is the server function",
                            "img": "iso.png",
                            "request": "/api"
                        },
                        {
                            "name": "Networks",
                            "desc": "Networks is the server function",
                            "img": "networks.png",
                            "request": "/api"
                        },
                        {
                            "name": "Rebuild",
                            "desc": "Rebuild is the server function",
                            "img": "recovery.png",
                            "request": "/api"
                        },
                        {
                            "name": "Reverse DNS",
                            "desc": "Reverse DNS is the server function",
                            "img": "dns.png",
                            "request": "/api"
                        },
                        {
                            "name": "Snapshots",
                            "desc": "Snapshots is the server function",
                            "img": "snapshot.png",
                            "request": "/api"
                        }
                    ]
                }
            }

            let service1 = moreOpt.moreOptions.serviceActions;
            let service2 = moreOpt.moreOptions.serviceManagement;

            let moreList = document.querySelector('.c-panel-des__items.s1');
            let moreList2 = document.querySelector('.c-panel-des__items.s2');

            for (const key in service1) {
                if (!Object.hasOwnProperty.call(service1, key)) continue;
                const element = service1[key];
                // console.log(element); 
                moreList.insertAdjacentHTML('beforeend', `<div class="c-panel-des__item">
                        <a>
                            <div class="c-panel-des__item_icon">
                                <img src="image/${element.img}" alt="icon" />
                            </div>
                            <div class="c-panel-des__item_txt">${element.name}</div>
                        </a>
                    </div>`);

            }

            for (const key in service2) {
                if (!Object.hasOwnProperty.call(service2, key)) continue;
                const element = service2[key];
                // console.log(element);   
                moreList2.insertAdjacentHTML('beforeend', `  <div class="c-panel-des__item">
                        <a >
                            <div class="c-panel-des__item_icon">
                                <img src="image/${element.img}" alt="icon" />
                            </div>
                            <div class="c-panel-des__item_txt">${element.name}</div>
                        </a>
                    </div>`);

            }



            // ---- to click particular service -----
            // ---- to send a fetch request -------

            let all_service = document.querySelectorAll('.c-panel-des__item a');

            all_service.forEach(e => {
                e.addEventListener('click', function () {
                    console.log(e);

                    fetch('./sample.json')
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json(); // Assuming the response is in JSON format
                        })
                        .then(data => {
                            console.log(data); // Process the fetched data
                        })
                        .catch(error => {
                            console.error('There was a problem with the fetch operation:', error);
                        });

                })
            });

