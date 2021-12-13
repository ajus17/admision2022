const SPAN_HOURS = document.querySelector('span#hours');
const SPAN_MINUTES = document.querySelector('span#minutes');
const SPAN_SECONDS = document.querySelector('span#seconds');

const MILLISECONDS_OF_A_SECOND = 1000;
const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24;

function updateCountdown() {
    const reammingtime = document.getElementById('reamming').innerHTML;
    const DATE_TARGET = new Date(reammingtime);


    const NOW = new Date();

    const DURATION = DATE_TARGET - NOW;

    if (DURATION <= 0) {
        //Swal.fire("Error: Tiempo Agotado");
        clearInterval(inter);
        let timerInterval
        Swal.fire({
            title: 'Error: Tiempo Agotado',
            icon: 'error',
            text: 'El tiempo establecido para la prueba ha finalizado',
            timer: 2500,
            allowOutsideClick: false,
            showConfirmButton: false,

            didOpen: () => {
                Swal.showLoading()
                timerInterval = setInterval(() => {
                    const content = Swal.getContent()
                    if (content) {
                        const b = content.querySelector('b')
                        if (b) {
                            b.textContent = Swal.getTimerLeft()
                        }
                    }
                }, 100)
            },
            willClose: () => {
                location.href = "testing-end.php";
                clearInterval(timerInterval);
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                location.href = "testing-end.php";
            }
        })


    } else {

        const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);

        const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);

        const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);

        const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);

        SPAN_HOURS.textContent = REMAINING_HOURS;
        SPAN_MINUTES.textContent = REMAINING_MINUTES;
        SPAN_SECONDS.textContent = REMAINING_SECONDS;
    }

}

var inter = setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);