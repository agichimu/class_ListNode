<?php
class ListNode {
public $val;
public $next;

function __construct($val = 0, $next = null) {
$this->val = $val;
$this->next = $next;
}
}

function findMiddleNode($head) {
$last = $head;
$fast = $head;

while ($fast !== null && $fast->next !== null) {
$last = $last->next;
$fast = $fast->next->next;
}

return $last;
}

$head1 = new ListNode(14);
$head1->next = new ListNode(16);
$head1->next->next = new ListNode(18);
$head1->next->next->next = new ListNode(20);
$head1->next->next->next->next = new ListNode(24);

$middleNode1 = findMiddleNode($head1);
$output1 = [];
while ($middleNode1 !== null) {
$output1[] = $middleNode1->val;
$middleNode1 = $middleNode1->next;
}
echo implode(',', $output1);

echo "\n";

$head2 = new ListNode(2);
$head2->next = new ListNode(4);
$head2->next->next = new ListNode(6);
$head2->next->next->next = new ListNode(8);
$head2->next->next->next->next = new ListNode(10);
$head2->next->next->next->next->next = new ListNode(12);

$middleNode2 = findMiddleNode($head2);
$output2 = [];
while ($middleNode2 !== null) {
$output2[] = $middleNode2->val;
$middleNode2 = $middleNode2->next;
}
echo implode(',', $output2);
