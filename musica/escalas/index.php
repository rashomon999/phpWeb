<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Piano Realista</title>
<style>
  body {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: sans-serif;
    margin-top: 50px;
  }

  .piano {
    display: flex;
    position: relative;
  }

  .key {
    width: 60px;
    height: 200px;
    border: 1px solid #000;
    margin: 0 1px;
    background: white;
    position: relative;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    font-weight: bold;
    user-select: none;
    transition: background 0.1s;
  }

  .key.black {
    width: 40px;
    height: 120px;
    background: black;
    color: white;
    position: absolute;
    margin-left: -20px;
    z-index: 2;
  }

  .key.active {
    background: yellow !important;
  }

  .note-name {
    margin-top: 20px;
    font-size: 24px;
    font-weight: bold;
  }
</style>
</head>
<body>

<h1>Piano Interactivo - 2 Octavas</h1>
<div class="piano">
  <!-- Octava 1 -->
  <div class="key" data-note="C4">C4</div>
  <div class="key black" data-note="C#4" style="left:45px">C#4</div>
  <div class="key" data-note="D4">D4</div>
  <div class="key black" data-note="D#4" style="left:105px">D#4</div>
  <div class="key" data-note="E4">E4</div>
  <div class="key" data-note="F4">F4</div>
  <div class="key black" data-note="F#4" style="left:225px">F#4</div>
  <div class="key" data-note="G4">G4</div>
  <div class="key black" data-note="G#4" style="left:285px">G#4</div>
  <div class="key" data-note="A4">A4</div>
  <div class="key black" data-note="A#4" style="left:345px">A#4</div>
  <div class="key" data-note="B4">B4</div>

  <!-- Octava 2 -->
  <div class="key" data-note="C5">C5</div>
  <div class="key black" data-note="C#5" style="left:525px">C#5</div>
  <div class="key" data-note="D5">D5</div>
  <div class="key black" data-note="D#5" style="left:585px">D#5</div>
  <div class="key" data-note="E5">E5</div>
  <div class="key" data-note="F5">F5</div>
  <div class="key black" data-note="F#5" style="left:705px">F#5</div>
  <div class="key" data-note="G5">G5</div>
  <div class="key black" data-note="G#5" style="left:765px">G#5</div>
  <div class="key" data-note="A5">A5</div>
  <div class="key black" data-note="A#5" style="left:825px">A#5</div>
  <div class="key" data-note="B5">B5</div>
</div>

<div class="note-name" id="note-name">Presiona una tecla</div>


<script>
const keys = document.querySelectorAll('.key');
const noteDisplay = document.getElementById('note-name');

// Relación entre nombre de la tecla y archivo mp3
const noteFiles = {
  'C4': 'C4.mp3', 'C#4': 'Db4.mp3', 'D4': 'D4.mp3', 'D#4': 'Eb4.mp3', 'E4': 'E4.mp3', 'F4': 'F4.mp3', 'F#4': 'Gb4.mp3',
  'G4': 'G4.mp3', 'G#4': 'Ab4.mp3', 'A4': 'A4.mp3', 'A#4': 'Bb4.mp3', 'B4': 'B4.mp3',
  'C5': 'C5.mp3', 'C#5': 'Db5.mp3', 'D5': 'D5.mp3', 'D#5': 'Eb5.mp3', 'E5': 'E5.mp3', 'F5': 'F5.mp3', 'F#5': 'Gb5.mp3',
  'G5': 'G5.mp3', 'G#5': 'Ab5.mp3', 'A5': 'A5.mp3', 'A#5': 'Bb5.mp3', 'B5': 'B5.mp3'
};


const keyMap = {
  // Octava 1 (fila superior Q–P → C4–B4)
  'q': 'C4',  '2': 'C#4', 'w': 'D4',  '3': 'D#4', 'e': 'E4',
  'r': 'F4',  '5': 'F#4', 't': 'G4',  '6': 'G#4', 'y': 'A4',
  '7': 'A#4', 'u': 'B4',  'i': 'C5',

  // Octava 2 (fila inferior Z–M → C5–B5)
  'z': 'C5',  's': 'C#5', 
  'x': 'D5',  'o': 'D5',   // <-- O también toca D5
  'd': 'D#5', 'c': 'E5',
  'v': 'F5',  'g': 'F#5', 'b': 'G5',  'h': 'G#5', 'n': 'A5',
  'j': 'A#5', 'm': 'B5'
};





// Función para reproducir nota
function playNote(note) {
  if (!note) return;
  noteDisplay.textContent = "Nota: " + note;

  // Encontrar tecla en pantalla y activarla
  const key = document.querySelector(`.key[data-note="${note}"]`);
  if (key) {
    key.classList.add('active');
    setTimeout(() => key.classList.remove('active'), 200);
  }

  // Reproducir el archivo correspondiente
  const audio = new Audio(noteFiles[note]);
  audio.play();
}

// Click con el mouse
keys.forEach(key => {
  key.addEventListener('mousedown', () => {
    playNote(key.dataset.note);
  });
});

// Teclado físico
document.addEventListener('keydown', (e) => {
  if (keyMap[e.key]) {
    playNote(keyMap[e.key]);
  }
});
</script>






</body>
</html>
