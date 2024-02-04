<x-app-layout>
    <style>
        #calendar {
            max-width: 600px; /* Ajusta el ancho máximo según tus preferencias */
            margin: 0 auto; /* Centra el calendario */
            color: white; /* Cambia el color del texto a blanco */
        }
    </style>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var today = new Date();
            var selectedDate = null; // Variable para almacenar la fecha seleccionada anteriormente

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                validRange: {
                    start: today.toISOString().split('T')[0], // Fecha actual en formato ISO
                },
                events: [
                    // Agrega eventos reservados desde tu controlador
                        @foreach($citas as $cita)
                    {
                        start: '{{ $cita->fecha }}',
                        color: 'red',
                        textColor: 'black',
                        display: 'background',
                        selectable: 'false'
                    },
                    @endforeach
                ],
                dateClick: function(info) {
                    // Desseleccionar el día anterior
                    if (selectedDate) {
                        var prevDayEl = document.querySelector('.selected-day');
                        if (prevDayEl) {
                            prevDayEl.style.backgroundColor = ''; // Restablecer el color de fondo
                            prevDayEl.classList.remove('selected-day'); // Remover la clase
                        }
                    }

                    // Seleccionar el nuevo día
                    info.dayEl.style.backgroundColor = 'gainsboro';
                    info.dayEl.classList.add('selected-day'); // Agregar la clase
                    document.getElementById('fecha').value = info.dateStr;
                    console.log(document.getElementById('fecha').value);

                    // Actualizar la fecha seleccionada anteriormente
                    selectedDate = info.dateStr;
                }
            });

            calendar.render();
        });



    </script>
</head>
<body>
<h2>Seleccionar fecha para cita</h2>
<form action="{{ route('citas.store') }}" method="post">
    @csrf
    <input type="hidden" name="coche_id" value="{{ $coche_id }}">

    <!-- Campo oculto para almacenar la fecha seleccionada -->
    <input type="hidden" name="fecha" id="fecha">

    <div id="calendario"></div>
    <button type="submit">Guardar cita</button>
</form>
<div id='calendar'></div>
</body>
</x-app-layout>


