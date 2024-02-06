<x-app-layout>
    <style>
        #calendar {
            max-width: 700px;
            margin: 0 auto;
            color: white;
            font-size: 80%;
        }
        #calendar .fc-day:hover {
            background-color: rgba(129, 129, 129, 0.56); /* Cambia este color al color deseado para el hover */
            cursor: pointer;
        }

        h2{
            font-size: 2rem;
            color: white;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 20px;
        }
        .boton{
            border: 1px solid white;
            box-sizing: border-box;
            background-color: white;
            color: rgb(17 24 39 / var(--tw-bg-opacity));
            width: 7rem !important;
            border-radius: 10px;
            margin-top: 10px;
            margin-left: 700px

        }
        .boton:hover{
            background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            color: white;
        }

        .fc-event {
            background-color: rgba(255, 0, 0, 0.37);
            font-size: 60%;
        }
        .fc-event:hover {
            background-color: rgba(255, 0, 0, 0.19);
        }
    </style>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var today = new Date();
            var selectedDate = null;

            var reservedDates = [
                @foreach($citas as $cita)
                    '{{ $cita->fecha }}',
                @endforeach
            ];

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                validRange: {
                    start: today.toISOString().split('T')[0],
                },
                events: reservedDates.map(function (date) {
                    var endDate = new Date(date); // Crear una nueva fecha a partir de la fecha de inicio
                    endDate.setHours(endDate.getHours() + 1); // Agregar 1 hora a la fecha de inicio para obtener la fecha de finalización
                    return {
                        title: 'Reservado',
                        start: date,
                        end: endDate, // Establecer la fecha de finalización
                        backgroundColor: 'red',
                        style: 'background',
                    };
                }),

                dateClick: function (info) {
                    // Comprobar si el día está reservado
                    var isReserved = reservedDates.includes(info.dateStr);
                    // Comprobar si el día es un domingo
                    var isSunday = info.date.getDay() === 0;

                    // Seleccionar el nuevo día si no está reservado y no es un domingo
                    if (!isReserved && !isSunday) {
                        // Desseleccionar el día anterior
                        if (selectedDate) {
                            var prevDayEl = document.querySelector('.selected-day');
                            if (prevDayEl) {
                                prevDayEl.style.backgroundColor = '';
                                prevDayEl.classList.remove('selected-day');
                            }
                        }
                        info.dayEl.style.backgroundColor = 'gainsboro';
                        info.dayEl.classList.add('selected-day');
                        document.getElementById('fecha').value = info.dateStr;
                        selectedDate = info.dateStr;

                        // Mostrar el input para seleccionar la hora
                        document.getElementById('hora-container').style.display = 'block';

                        // Limpiar las opciones de horas
                        var horaInput = document.getElementById('hora');
                        horaInput.innerHTML = '';

                        // Obtener horas reservadas para el día seleccionado
                        var reservedHours = reservedDates
                            .filter(function(date) {
                                return new Date(date).toISOString().split('T')[0] === info.dateStr;
                            })
                            .map(function(date) {
                                return new Date(date).getHours() + ':00';
                            });

                        // Crear opciones de horas disponibles
                        for (var i = 9; i <= 17; i++) {
                            var hour = i < 10 ? '0' + i + ':00' : i + ':00';
                            var option = document.createElement('option');
                            option.value = hour;
                            option.textContent = hour;
                            horaInput.appendChild(option);
                            if (reservedHours.includes(hour)) {
                                option.disabled=true;
                            }

                        }
                    }
                }
            });

            calendar.render();
        });
    </script>




    <h2>Seleccionar fecha y hora para cita:</h2>
    <form action="{{ route('citas.store') }}" method="post">
        @csrf
        <input type="hidden" name="coche_id" value="{{ $coche_id }}">
        <input type="hidden" name="fecha" id="fecha">
        <div id="calendar"></div>

        <!-- Input para seleccionar la hora -->
        <div id="hora-container" style="display: none;">
            <label for="hora">Seleccionar hora:</label>
            <select id="hora" name="hora" required>
            </select>
        </div>


        <button class="boton" type="submit">Guardar cita</button>
    </form>
</x-app-layout>
