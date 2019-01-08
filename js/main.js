// random video
var videoStorage = [
  'vid/superbrothers_hut',
  'vid/brothers',
  'vid/bientot_lete',
  'vid/yearwalk_owls',
  'vid/mirrorsedge',
  'vid/mirrorsedge_plane',
  'vid/thumper',
  'vid/witness_coast',
  'vid/witness_house',
  'vid/witness_pink',
  'vid/witness_purple',
  'vid/witness_waves',
  'vid/proteus_waves',
  'vid/proteus_dawn',
  'vid/proteus_night',
  'vid/proteus_summer',
  'vid/proteus_cabin',
  'vid/proteus_fall',
  'vid/proteus_winter'
],

video = document.querySelector('#bgvid'),
    // choose one random url from storage as the active video
    activeVideoUrl = videoStorage[Math.round(Math.random() * (videoStorage.length - 1))];
if(video) {
  video.setAttribute('src', activeVideoUrl + '.webm');
};

// animate on scroll library
AOS.init({
  startEvent: 'load',
  disable: 'mobile'
});

//mobile menu
var mobileMenu = document.getElementsByClassName("menu-in-wrap")[0];
function myFunction(x) {
    x.classList.toggle("change");
    mobileMenu.classList.toggle("open");
};

// mixitup for filtering texts
var mixEl = document.querySelector(".text-container");
var mixer;

if (mixEl) {
  mixer = mixitup(mixEl);
};

// modal box for versioning
var modal = document.getElementById("modalVersion");
var btnModal = document.getElementById("modalButton");
var spanModalClose = document.getElementsByClassName("close")[0];

// click button to open modal
btnModal.onclick = function() {
  modal.style.display = "block";
};

// click span to close modal
spanModalClose.onclick = function() {
  modal.style.display = "none";
};

// click outside modal to close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

// switch between nico and maratz
var cvRecto = document.getElementById("cvHeader__recto");
var cvVerso = document.getElementById("cvHeader__verso");
var cvNico = document.getElementById("cvContainerRecto");
var cvMaratz = document.getElementById("cvContainerVerso");

function switchRecto() {
  cvRecto.style.opacity = "1";
  cvVerso.style.opacity = "0";
  cvNico.style.display = "block";
  cvMaratz.style.display = "none";
};

function switchVerso() {
  cvRecto.style.opacity = "0";
  cvVerso.style.opacity = "1";
  cvNico.style.display = "none";
  cvMaratz.style.display = "block";
};

// css sucks ass, can do a~b but not b~a so need a workaround
var imgRecto = document.getElementById("cvRecto");

function hoverCvVerso() {
  imgRecto.style.opacity = "0.5";
};

function normalCvVerso() {
  imgRecto.style.opacity = "1";
};

var info1 = document.getElementById("cvSkill-1--info");
var info2 = document.getElementById("cvSkill-2--info");
var info3 = document.getElementById("cvSkill-3--info");
var icons1 = document.getElementById("cvSkill-1--icons");
var icons2 = document.getElementById("cvSkill-2--icons");
var icons3 = document.getElementById("cvSkill-3--icons");


function cvDisplay1() {
  info1.style.display = "block";
  info2.style.display = "none";
  info3.style.display = "none";
  icons1.style.display = "flex";
  icons2.style.display = "none";
  icons3.style.display = "none";
};

function cvDisplay2() {
  info1.style.display = "none";
  info2.style.display = "block";
  info3.style.display = "none";
  icons1.style.display = "none";
  icons2.style.display = "flex";
  icons3.style.display = "none";
};

function cvDisplay3() {
  info1.style.display = "none";
  info2.style.display = "none";
  info3.style.display = "block";
  icons1.style.display = "none";
  icons2.style.display = "none";
  icons3.style.display = "flex";
};

// audio in texts
var audio = document.querySelector("#audio");
var audioPlayer = document.querySelector("#audioPlayer");
var audioIcon = document.querySelector("#audioIcon");

if (audio) {
  audioPlayer.onclick = function(e) {
    if (audio.paused) {
      audio.play();
      audioIcon.classList.remove("fa-play-circle");
      audioIcon.classList.add("fa-pause-circle");
    } else {
      audio.pause();
      audioIcon.classList.remove("fa-pause-circle");
      audioIcon.classList.add("fa-play-circle");
    }
  }
};

function resetAudio() {
  audioIcon.classList.remove("fa-pause-circle");
  audioIcon.classList.add("fa-play-circle");
};

// progress bar
function udpateProgress() {
    var player = document.getElementById("audio");
    var progressbar = document.getElementById("seekbar");
    progressbar.value = (player.currentTime / player.duration);
};
