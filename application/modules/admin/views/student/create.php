<div class="section-wrapper">
	<?php
        $attributes = array(
            'class' => 'form-horizontal',
            'id' => 'create-student'
        );
        echo form_open_multipart('admin/student/create', $attributes);

    ?>
    <div class="form-element ">
        <div>
            <?php echo form_label('First Name'); ?>
            <?php
                $data = array(
                    'name' => 'FirstName',
                    'id' => 'first-name',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('FirstName','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Middle Name'); ?>
            <?php
                $data = array(
                    'name' => 'MiddleName',
                    'id' => 'middle-name',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('MiddleName','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Last Name'); ?>
            <?php
                $data = array(
                    'name' => 'LastName',
                    'id' => 'last-name',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('LastName','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Father\'s Name'); ?>
            <?php
                $data = array(
                    'name' => 'FathersName',
                    'id' => 'fathers-name',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('FathersName','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Mother\'s Name'); ?>
            <?php
                $data = array(
                    'name' => 'MothersName',
                    'id' => 'mothers-name',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('MothersName','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('D.O.B'); ?>
            <?php
                $data = array(
                    'name' => 'dob',
                    'id' => 'dob',
                    'class' => 'datepicker',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('dob','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Class'); ?>
            <?php
                $data = array(
                    'name' => 'class',
                    'id' => 'class',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('class','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Courses'); ?>
            <?php
                $data = array(
                    'name' => 'courses',
                    'id' => 'courses',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('courses','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Batch'); ?>
            <?php
                $data = array(
                    'name' => 'batch',
                    'id' => 'batch',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('batch','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Time'); ?>
            <?php
                $data = array(
                    'name' => 'time',
                    'id' => 'time',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('time','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Mobile No.'); ?>
            <?php
                $data = array(
                    'name' => 'MobileNumber',
                    'id' => 'mobile-number',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('MobileNumber','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Email Id'); ?>
            <?php
                $data = array(
                    'name' => 'email',
                    'id' => 'email',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('email','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Fee Per Month'); ?>
            <?php
                $data = array(
                    'name' => 'FeePerMonth',
                    'id' => 'fee-per-month',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('FeePerMonth','<div class="error">', '</div>'); ?>

            
        </div>
    </div>

    <div class="form-element ">
        <div>
            <?php echo form_label('FeePerYear'); ?>
            <?php
                $data = array(
                    'name' => 'FeePerYear',
                    'id' => 'fee-per-year',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('FeePerYear','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="form-element ">
        <div>
            <?php echo form_label('Stream'); ?>
            <?php
                $data = array(
                    'name' => 'stream',
                    'id' => 'stream',
                    'class' => '',
                    'value' => '',
                    'placeholder' => ''
                );
                echo form_input($data);
            ?>
            <?php echo form_error('stream','<div class="error">', '</div>'); ?>

            
        </div>
    </div>
    <div class="submit-btn text-center" id="contact_submit" data-ux="Block">
        <?php
        $submit_data = array(
            'value' => 'Create',
            'id' => 'submit',
            'class' => 'btn btn-info'
        );
        echo form_submit($submit_data);
        ?>
        
 
        <button type="button" class="btn btn-info new-btn"
			onclick="location.href='<?php echo base_url();?>admin/order'">Back</button>
	</div>
    

    <?php
        echo form_close();
    ?>
</div>
