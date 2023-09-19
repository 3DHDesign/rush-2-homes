<div class="row" id="propertyinfo">
    <div class="col-lg-4">
        <div class="property-info">
            <h4>General Details</h4>
            <p>Your name, your history, your essence—all waiting to be discovered.</p>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="add-property-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="review-form">
                        <label>Your name</label>
                        <input type="text" wire:model="name" class="form-control" placeholder="Enter name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="review-form">
                        <label>Your email</label>
                        <input type="text" wire:model="email" class="form-control" placeholder="Enter email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="review-form">
                        <label>Your number</label>
                        <input type="text" wire:model="number" class="form-control" placeholder="Enter number">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="review-form">
                        <label>Your address</label>
                        <textarea class="form-control" wire:model="address" rows="8" placeholder="Address"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="property-submit">
                <button wire:click="store" class="btn btn-primary">Update changes</button>
            </div>
        </div>
    </div>
</div>
