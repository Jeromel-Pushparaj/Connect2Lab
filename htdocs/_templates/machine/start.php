<section class="d-flex justify-content-center align-items-center vh-100">
    <div>
        <h1 class="mb-4">Do Something Great With Your Machines!</h1>
        <div class="d-flex flex-row">
            <?php
            for ($i = 0; $i <= 3; $i++) {
                // Machine-specific information
                $machineTitle = "Machine " . ($i + 1);
                $machineDescription = "Detailed information about Machine " . ($i + 1);
            ?>
            <div class="card shadow m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $machineTitle; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">About Machine</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-success my-2">Start</a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal<?php echo $i; ?>">Info</button>
                </div>
            </div>

            <!-- Modal for each machine -->
            <div class="modal fade" id="infoModal<?php echo $i; ?>" tabindex="-1" aria-labelledby="infoModalLabel<?php echo $i; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel<?php echo $i; ?>"><?php echo $machineTitle; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo $machineDescription; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
