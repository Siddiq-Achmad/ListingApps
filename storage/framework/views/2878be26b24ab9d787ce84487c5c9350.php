<div class="container text-center">
    <div class="row d-flex inline-flex">
        <div class="col-md-2">
            <p class="mb-0">Simple</p>
            <a href="" id="container" ><?php echo $simple; ?></a><br/>
            <button id="download" class="mt-2 btn btn-info text-light" onclick="downloadSVG()">Download SVG</button>
        </div>
        <div class="col-md-2">
            <p class="mb-0">Color Change</p>
            <?php echo $changeColor; ?>

        </div>
        <div class="col-md-2">
            <p class="mb-0">Background Color Change </p>
            <?php echo $changeBgColor; ?>

        </div>


        <div class="col-md-2">
            <p class="mb-0">Style Square</p>
            <?php echo $styleSquare; ?>

        </div>
        <div class="col-md-2">
            <p class="mb-0">Style Dot</p>
            <?php echo $styleDot; ?>

        </div>
        <div class="col-md-2">
            <p class="mb-0">Style Round</p>
            <?php echo $styleRound; ?>

        </div>
    </div>
</div>


<script>

    function downloadSVG() {
      const svg = document.getElementById('container').innerHTML;
      const blob = new Blob([svg.toString()]);
      const element = document.createElement("a");
      element.download = "qrcode.svg";
      element.href = window.URL.createObjectURL(blob);
      element.click();
      element.remove();
    }
    </script><?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/qrcode.blade.php ENDPATH**/ ?>