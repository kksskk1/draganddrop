<html>
    <head>
        <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    </head>

    <script>
        function onDragStart(event) {
          event
            .dataTransfer
            .setData('text/plain', event.target.id);

          /*event
            .currentTarget
            .style
            .backgroundColor = 'yellow';*/
        }

        function onDragOver(event) {
          event.preventDefault();
          event.dataTransfer.dropEffect = "move";
        }

        function onDrop(event) {
          var id = event.dataTransfer.getData('text');    //드래그한 id
          console.log(id);
          id = id.split('_');
          id = id[1];
          console.log(id);


          var test_val = $("#box_"+id+" > #test_"+id).val();

          var dropzone = event.target.id; //드롭할 id
          console.log(dropzone);
          dropzone = dropzone.split('_');
          dropzone = dropzone[1];
          console.log(dropzone);

          $("#box_"+dropzone+" > #test_"+dropzone).val(test_val);
          event
            .dataTransfer
            .clearData();
        }
    </script>

    <body>
        <div id="box_1" style="background-color: blue;" draggable='true' ondragstart='onDragStart(event);'>
            <input type="text" id="test_1" value="">
        </div>

        <br>
        <br>


        <div id="box_2" style="background-color: red;" draggable='true' ondragover='onDragOver(event);' ondrop='onDrop(event);'>
            <input type="text" id="test_2" value="">
        </div>

        <br>
        <br>


        <div id="box_3" style="background-color: red;" draggable='true' ondragover='onDragOver(event);' ondrop='onDrop(event);'>
            <input type="text" id="test_3" value="">
        </div>


        <br>
        <br>

        <div id="box_4" style="background-color: red;" draggable='true' ondragover='onDragOver(event);' ondrop='onDrop(event);'>
            <input type="text" id="test_4" value="">
        </div>
    </body>
</html>
