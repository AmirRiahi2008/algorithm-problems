class Solution {
  majorityElement(nums) {
    const counts = {};
    const majorityCount = Math.floor(nums.length / 2);

    for (let num of nums) {
      counts[num] = (counts[num] || 0) + 1;

      if (counts[num] > majorityCount) {
        return num;
      }
    }
  }
}

$solutionModel = new Solution();
console.log($solutionModel.majorityElement([3, 2, 3]));
console.log($solutionModel.majorityElement([2, 2, 1, 1, 1, 2, 2]));

// Question
// https://leetcode.com/problems/fizz-buzz/description/
