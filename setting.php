<!-- Settings -->

<div id="settings" class="tab-content">
    <div class="dashboard-grid">
        <div class="card-container">
            <h2 style="text-align: center; margin-bottom: 20px; color: #333;">Email Recepient</h2>
            <div id="emailRecipients">
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px;">
                    <span>admin@pup.edu.ph</span>
                    <span style="color: #00d084;">✓ Active</span>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px;">
                    <span>maintenance@pup.edu.ph</span>
                    <span style="color: #00d084;">✓ Active</span>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px;">
                    <span>facilities@pup.edu.ph</span>
                    <span style="color: #00d084;">✓ Active</span>
                </div>
            </div>
            <button class="btn btn-danger" style="margin-top: 15px;" data-bs-toggle="modal" data-bs-target="#addEmail">Add Recipient</button>
        </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addEmail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Email Recipient</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="POST">
            <div class="modal-body">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="add_email_submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
  </div>
</div>