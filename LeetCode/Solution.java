package practice;

public class Solution {
	public static int searchInsert(int[] nums, int target) {
		int t=0;
        for (int i = 0; i<nums.length; i++ ){
            
//            if(nums[i] != target){
//                continue;
//            }
            if (nums[i] == target){
                t = i;
                
            }
            else if(target!=nums[i] && target>nums[i]){
                 t = i+1;
               
            }
        }
        return t;
    }

	public static void main(String[] args) {
		int [] nums = {0,1,2};
		System.out.print(searchInsert(nums, 8));

	}

}
