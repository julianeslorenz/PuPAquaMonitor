<!-- Water Monitoring -->
<div id="monitoring" class="tab-content active">
    <div class="dashboard-grid">
        <div class="card-container">
            <h2 style="text-align: center; margin-bottom: 20px; color: #333;">Virtual Water Tank</h2>
            <div class="tank-container">
                <div class="tank">
                    <div class="water" id="waterLevel"></div>
                    <div class="water-level-display" id="levelDisplay">75%</div>
                    <div class="tank-labels">
                        <span>100%</span>
                        <span>75%</span>
                        <span>50%</span>
                        <span>25%</span>
                        <span>0%</span>
                    </div>
                </div>

                <div class="tank">
                    <div class="water" id="waterLevel"></div>
                    <div class="water-level-display" id="levelDisplay">75%</div>
                    <div class="tank-labels">
                        <span>100%</span>
                        <span>75%</span>
                        <span>50%</span>
                        <span>25%</span>
                        <span>0%</span>
                    </div>
                </div>

                <div class="tank">
                    <div class="water" id="waterLevel"></div>
                    <div class="water-level-display" id="levelDisplay">75%</div>
                    <div class="tank-labels">
                        <span>100%</span>
                        <span>75%</span>
                        <span>50%</span>
                        <span>25%</span>
                        <span>0%</span>
                    </div>
                </div>
            </div>
            
            <div class="pump-status">
                <div class="pump-icon pump-on" id="pumpIcon">⚡</div>
                <span id="pumpStatus">Pump: RUNNING</span>
            </div>

            <div class="alert" id="alertBox">
                <strong>⚠️ Warning:</strong> <span id="alertMessage"></span>
            </div>
            
        </div>
    </div>
</div>