<div class="banner-editing-form">
    <h4 class="heading-four">Start Your Book Editing Journey!</h4>
    <form action="https://leads.infinityprojectmanager.com/brand/penguinbookwriters/lead" method="GET">
        <input type="hidden" name="brand_name" value="penguinbookwriters.com">
        <input type="hidden" id="lead_area" name="lead_area" value="http://www.penguinbookwriters.com">
        <div class="selceted-box" id="step1">
            <div class="selected-button">
                <div class="form-group">
                    <label for="language">Select The Language Of Your Manuscript</label>
                    <select name="language" class="form-select must-required" aria-label="Default select example">
                        <option class="form-select-option" value="English">English</option>
                        <option class="form-select-option" value="Spanish">Spanish</option>
                        <option class="form-select-option" value="German">German</option>
                        <option class="form-select-option" value="French">French</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="service">Select The Type Of Editing Services</label>
                    <select name="service" class="form-select must-required"  aria-label="Default select example">
                        <option class="form-select-option" selected value="Line Editing">Line Editing</option>
                        <option class="form-select-option" value="Developmental Editing">Developmental Editing</option>
                        <option class="form-select-option" value="Structural Editing">Structural Editing</option>
                        <option class="form-select-option" value="Copy Editing">Copy Editing</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="genre">Select The Book Genre</label>
                    <select name="genre" class="form-select must-required" aria-label="Default select example">
                        <option class="form-select-option" selected value="Action">Action</option>
                        <option class="form-select-option" value="Comics">Comics</option>
                        <option class="form-select-option" value="Fiction">Fiction</option>
                        <option class="form-select-option" value="Children's">Children's</option>
                        <option class="form-select-option" value="Romance">Romance</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="count">Enter Your Page Count</label>
                    <input type="number" class="number_count" name="number" placeholder="000" required>
                </div>
            </div>
            <div class="form-group step-form-btns">
                <button class="next-btn" id="nextBtn">Next</button>
            </div>
        </div>
        <div class="selceted-box" id="step2">
            <div class="selected-button">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Example@example.com" required>
                </div>
                <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="phone" name="phone" placeholder="+1-(234)-567890" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" placeholder="Text Here..." required></textarea>
                </div>
            </div>
            <div class="form-group step-form-btns">
                <button class="previous-btn" id="prevBtn">Previous</button>
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </div>
    </form>     
</div>
