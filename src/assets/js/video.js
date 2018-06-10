
const videoWrapper = document.querySelector('.video-wrapper')
const videoNode = document.querySelector('video')
const video = videojs(videoNode, {
  controls: false
})
videoWrapper.addEventListener('click', () => {
  if (playing) toggleVideo()
})

const container = document.querySelector('.video-container')
const playButton = document.getElementById('play-video')
playButton.addEventListener('click', () => {
  toggleVideo()
})

let playing = false

function toggleVideo() {
  if (!playing) {
    container.classList.add('playing')
    video.play()
  } else {
    container.classList.remove('playing')
    video.pause()
  }

  playing = !playing
}
