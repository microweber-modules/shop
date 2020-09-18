<?php if ($orders): ?>
    <label class="control-label mb-3 mt-3"><?php print _e('All orders'); ?></label>

    <?php foreach ($orders as $item) : ?>
        <?php $is_order = true; ?>
        <?php include module_dir('admin/notifications') . 'notif_order.php'; ?>
    <?php endforeach; ?>
<?php else: ?>
    <?php if (isset($params['data-parent-module']) AND $params['data-parent-module'] != 'shop/orders/dashboard_recent_orders'): ?>
        <div class="no-items-found orders">
            <div class="row">
                <div class="col-12">
                    <div class="no-items-box" style="background-image: url('<?php print modules_url(); ?>microweber/api/libs/mw-ui/assets/img/no_orders.svg'); ">
                        <h4>You don’t have any orders yet</h4>
                        <p>Here you can track your orders</p>
                        <br/>
                        <a href="javascript:mw_admin_add_order_popup()" class="btn btn-primary btn-rounded">Add order</a>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    $('.js-hide-when-no-items').hide();
                });
            </script>
        </div>
    <?php else: ?>
        <div class="icon-title">
            <i class="mdi mdi-shopping"></i> <h5><?php _e('You don\'t have any orders yet.'); ?></h5>
        </div>
    <?php endif; ?>
<?php endif; ?>


