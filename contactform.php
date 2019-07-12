
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="css/form.css" >
        <script src="js/form.js"></script>
    
          <div class="pardiv"  >
                        <div class="panel panel-danger">
                            <div class="panel-body" style="background:#bdbdbd">
                                <form id="reused_form">
                                    <div class="form-group">
                                        <label >Անուն</label>
                                        <input type="text" name="name" required class="form-control" placeholder="Անուն">
                                    </div>
                                    <div class="form-group">
                                        <label >Էլ․ փոստ</label>
                                        <input type="email" name="email" required class="form-control" placeholder="Էլ․ փոստ">
                                    </div>
                                    <div class="form-group">
                                        <label >Նամակ</label>
                                        <textarea rows="3" name="message" class="form-control" placeholder="Ձեր նամակը մասնագետին ․․․"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-raised btn-lg btn-warningg" type="submit">ՈՒղարկել</button>
                                    </div>
                                </form>
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Սխալմունք
                                    </h4>
                                     Ձեր նամակը հնարավոր չէ ուղարկել 
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
                                    <h2>Ձեր նամակը հաջողությամբ ուղարկված է</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                
                