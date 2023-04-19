let canvas = document.querySelector("canvas");
let audio = document.querySelector("audio");

let wave = new Wave(audio, canvas);

wave.addAnimations(
    new wave.animations.Cubes({
        top: true,
        count: 60,
        cubeHeight: 10,
        fillColor: { gradient: [ "#FF9ABB", "#FF7A88", "#FF99AC" ] },
        lineColor: "rgba(0, 0, 0, 0)",
        radius: 1,
    })
)