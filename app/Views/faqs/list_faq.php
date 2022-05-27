<?= $this->extend("layout/base");?>
<?=$this->section("styles")?>
<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/faq.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous"/>
<?= $this->endSection();?>
<?= $this->section("content");?>
<section class="FAQ">
    <div class="container">
        <div class="faq-text">
            <div class="faq-heading">
                <h2>Frequently Asked Questions (FAQ's) – Campers Trader</h2>
            </div>
            <div class="faq-para">
                <p>Campers Trader, one of the most experienced portals for camper van, motorhomes, caravans, and all such vehicles has a process to maintain. The process however is related to buying and selling, renting, and hiring a vehicle of your choice. Also, there are always guidance calls and other matters that clients want to know about. That too in detail. Which is the reason why we have mentioned some of the most frequently asked queries. If in case you don’t see the answer looked for, don’t hesitate or worry. Just use the live chat to get our attention. What else you can do? Email or call us directly on the number given on the contact us page.</p>
            </div>
        </div>
        <div class="card card-lg">
            <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                <?php
                foreach($faqs as $faq){?>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <a
                            class="collapsed"
                            role="button"
                            data-toggle="collapse"
                            href="#collapse_<?= $faq->id ?>"
                            aria-expanded="false"
                        ><?= $faq->title?></a
                        >
                    </div>
                    <div id="collapse_<?= $faq->id ?>" class="collapse" data-parent="#accordion_2">
                        <div class="card-body pa-15">
                           <?= $faq->description?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="any-query">
            <div class="query-text">
                <p>If there are still any queries that you’d like to discuss with us, simply press the tab below.</p>
            </div>
            <div class="contact-btn">
                <a href="#"><button class="contact">Contact Us</button></a>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection();?>
<?=$this->section("scripts")?>
<?= $this->endSection();?>


