<html>
 <head>
   <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
       <script src="https://cdn.jsdelivr.net/gh/donmccurdy/aframe-extras@v6.1.1/dist/aframe-extras.min.js"></script>
       <script src="https://unpkg.com/aframe-orbit-controls@1.0.0/dist/aframe-orbit-controls.min.js"></script>

 </head>
 <body>
   <a-scene vr-mode-ui="enabled: false" arjs="debugUIEnabled: false;">
     <a-sky color="#ECECEC"></a-sky>
     <a-entity 
     drag-rotate-component gltf-model="{{ asset('assets/3d/'.$animal->folder.'/scene.gltf') }}" scale="{{ $animal->setting_scale }}"  position="{{ $animal->setting_position }}" animation="property: rotation; to: 0 360 0; loop: true; dur: 10000;"     animation-mixer="clip: {{ $animal->animation }}; loop: infinite">
     </a-entity>
     <a-entity camera look-controls orbit-controls="target: 0 1.6 -0.5; minDistance: 0.5; maxDistance: 180; initialPosition: 0 5 15"></a-entity>
   </a-scene>
 </body>
</html>