<html>
<head>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/style.css">
</head>
<body>

<h2><?php echo $row['company'];?></h2>

<hr>
<br>
<div class="rTable">
    <div class="rTableRow">
        <div class="rTableHead"><strong>Company Details</strong></div>
        <div class="rTableCell">
            <b>Company:</b> <?php echo $row['company'];?> <br>
            <b>Business Type:</b> <?php echo $row['busines_type']; ?><br>
            <b>Monthly Turnover:</b> <?php echo $row['monthly_turn_over']; ?><br>
            <b>No. of Female Employees:</b> <?php echo $row['female_employee_no']; ?><br>

            <b>Representative:</b> <?php echo $row['fist_name']. " ".$row['last_name']; ?><br>
            <b>Designation:</b> <?php echo $row['designation']; ?> <br>
            <b>Email:</b> <?php echo $row['email']; ?><br>
            <b>Phone:</b> <?php echo $row['phone']; ?>
        </div>
    </div>
    <div class="rTableRow">
        <div class="rTableHead"><strong>Application Date</strong></div>
        <div class="rTableCell">
            <?php echo $row['subs_date']; ?>
        </div>
    </div>
    <div class="rTableRow">
        <div class="rTableHead"><strong>Category</strong></div>
        <div class="rTableCell">
            <ul>
                <?php if($row['blockchain'] ==1){ ?>
                <li><?php echo "Blockchain"; ?></li>
                <?php } ?>
                <?php if($row['cybersec'] ==1){ ?>
                <li><?php echo "Cybersecurity"; ?></li>
                <?php } ?>
                <?php if($row['digital_pymt_sln'] ==1){ ?>
                <li><?php echo "Digital Payment Solutions"; ?></li>
                <?php } ?>
                <?php if($row['cross_bdr_mymts'] ==1){ ?>
                <li><?php echo "Cross Border Payments"; ?></li>
                <?php } ?>
                <?php if($row['big_data_analytics'] ==1){ ?>
                <li><?php echo "Big Data Analytics"; ?></li>
                <?php } ?>
                <?php if($row['insur_tech'] ==1){ ?>
                <li><?php echo "InsurTech"; ?></li>
                <?php } ?>
                <?php if($row['e_commerce'] ==1){ ?>
                <li><?php echo "E-commerce"; ?></li>
                <?php } ?>
                <?php if($row['artifical_int'] ==1){ ?>
                <li><?php echo "Artificial Intelligence"; ?></li>
                <?php } ?>
                <?php if($row['mobile_banking'] ==1){ ?>
                <li><?php echo "Mobile Banking"; ?></li>
                <?php } ?>
                <?php if($row['micro_credit'] ==1){ ?>
                <li><?php echo "Microcredit"; ?></li>
                <?php } ?>
                <?php if($row['regulation'] ==1){ ?>
                <li><?php echo "Regulation"; ?></li>
                <?php } ?>
                <?php if($row['digital_economy'] ==1){ ?>
                <li><?php echo "Digital Economy"; ?></li>
                <?php } ?>
                <?php if($row['financial_literacy'] ==1){ ?>
                <li><?php echo "Financial Literacy"; ?></li>
                <?php } ?>
                <?php if($row['digital_identification'] ==1){ ?>
                <li><?php echo "Digital Identification"; ?></li>
                <?php } ?>
                <?php if($row['wealth_management'] ==1){ ?>
                <li><?php echo "Wealth Management"; ?></li>
                <?php } ?>
                <?php if($row['digital_savings'] ==1){ ?>
                <li><?php echo "Digital Savings"; ?></li>
                <?php } ?>
                <?php if($row['women_in_fintech'] ==1){ ?>
                <li><?php echo "Women in FinTech"; ?></li>
                <?php } ?>
                <?php if($row['banking'] ==1){ ?>
                <li><?php echo "Banking"; ?></li>
                <?php } ?>
                <?php if($row['fintech_enthusiast'] ==1){ ?>
                <li><?php echo "Fintech enthusiast"; ?></li>
                <?php } ?>

            </ul>
        </div>
    </div>
    <div class="rTableRow">
        <div class="rTableHead"><strong>What are you interested in?</strong></div>
        <div class="rTableCell">
            <ul>
                <?php if($row['programmes_and_vents'] ==1){ ?>
                <li><?php echo "Programmes and Events"; ?></li>
                <?php } ?>
                <?php if($row['promotion_and_advocacy'] ==1){ ?>
                <li><?php echo "Promotion and Advocacy"; ?></li>
                <?php } ?>
                <?php if($row['policy_and_regulation'] ==1){ ?>
                <li><?php echo "Policy and Regulation"; ?></li>
                <?php } ?>
                <?php if($row['capital_and_funding'] ==1){ ?>
                <li><?php echo "Capital and Funding"; ?></li>
                <?php } ?>
                <?php if($row['scaling_and_international'] ==1){ ?>
                <li><?php echo "Scaling and International"; ?></li>
                <?php } ?>

            </ul>
        </div>
    </div>

    <div class="rTableRow">
        <div class="rTableHead"><strong>Message</strong></div>
        <div class="rTableCell">
            <?php echo $row['message']; ?>
        </div>
    </div>
    <div class="rTableRow">
        <div class="rTableHead"><strong>File/Attachment</strong></div>
        <div class="rTableCell">
        <?php if (!empty($row['attachment'])) { ?>
            <a href="<?php echo base_url(); ?>public/uploads/registration/<?php echo $row['attachment']; ?>" target="_blank"><?php echo $row['attachment']; ?></a>
        <?php }else{ ?>
            <span>No file was attached </span>
        <?php } ?>
        </div>
    </div>
</div>

</body>
</html>